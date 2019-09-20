<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LandingPageForm;
use App\Models\ClientExport;
use App\Models\Payroll;
use App\Models\JobVacancy;
use App\Models\Applicant;
use App\Models\CompanyProfile;
use Maatwebsite\Excel\Facades\Excel;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class LandingPageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function page1()
    {
        $params = [];

        return view('landing-page/index');
    }

    public function career(){
        if(request()->job_title || request()->location)
        {
            \Session::put('job_title', request()->job_title);
            \Session::put('location', request()->location);
        }
        $job_title       = \Session::get('job_title');
        $location         = \Session::get('location');

         if(request()->reset == 1)
         { 
             \Session::forget('job_title');
             \Session::forget('location');
             return redirect()->route('landing-page.career.careers');
         }

        $params['data']   = JobVacancy::where('status', 1);

        if(!empty($job_title))
        {
        //    $params['data'] = $params['data']->where('job_title', $job_title);
            $params['data'] = $params['data']->where('job_title', 'Android Developer');
        //    return view('landing-page/career/careers');
        }

        if(!empty($location))
        {
            $params['data'] = $params['data']->where('company_location', $location);
        }

        $params['data'] = $params['data']->paginate(50);

        $params['vacancy'] = JobVacancy::where('status', 1)->get();
        $params['location'] = JobVacancy::where('status', 1)->get();

        return view('landing-page.career.careers')->with($params);
    }

    public function detailCareer($id){
        $params['data']   = JobVacancy::where('id', $id)->first();

        $params['job'] = JobVacancy::where('status', 1)
                                    ->where('id', '!=', $params['data']->id)
                                    ->where('job_title', $params['data']->job_title)->get();
                                    
        $params['company']   = CompanyProfile::where('company_name', $params['data']->company_name)->first();
        return view('landing-page/career/detail-careers')->with($params);
    }

    public function storeVacancy(Request $request){
        $data                           = new Applicant();
        $data->name                     = $request->full_name;
        $data->email                    = $request->email_address;
        $data->phone                    = $request->phone_number;
        $data->id_job_vacancy           = $request->id;
        $data->date_apply               = date('Y-m-d');

        if (request()->hasFile('file'))
        {
            $file = $request->file('file');
            if($file->getMimeType() == 'application/pdf'){

                $rules = $request->validate([
                    "file" => "required|mimes:pdf|max:1000",
                ]);

                if($rules){
                    $fileName = 'cv_'.$request->email_address.".".$file->getClientOriginalExtension();

                    $destinationPath = public_path('/storage/cv');
                    $file->move($destinationPath, $fileName);

                    $data->file = $fileName; 
                    $fileloc = public_path('/storage/cv') .'/'. $fileName;

                    $data->save(); 
                    // $emailto = ['recruitment@empore.co.id', 'farros@empore.co.id'];
                    $email = $request->email_address;

                    return $this->attachCV($email, $fileloc, $fileName, $request);

                }else{
                    $params['notif'] = 'Failed';
                    $params['message'] = 'File size can not be more than 1 MB';
                    $params['submit'] = 'notactive';
                    $params['button'] = 'apply';
                    $params['id'] = $request->id;

                    return view('landing-page/career/apply')->with($params);
                }
            }else{
                $params['notif'] = 'Failed';
                $params['message'] = 'Uploaded file must be in PDF format!';
                $params['submit'] = 'notactive';
                $params['button'] = 'apply';
                $params['id'] = $request->id;

                return view('landing-page/career/apply')->with($params);
            }
        }

    }

    public function attachCV($email, $fileloc, $fileName, $request){
        $params['text']     = 'Job Application';
        $emailto = 'recruitment@empore.co.id';

        if($email != ""){ 
            \Mail::send('email.trial-account', $params,
                function($message) use($email, $emailto) {
                    $message->from('noreply@empore.co.id');
                    $message->to($email);
                    $message->subject('Thank you for Apply !, your CV has already received.');
                }
            );
        }

        \Mail::send('email.trial-account', $params,
                function($message) use($fileloc, $email, $emailto, $fileName) {
                    $message->from($email);
                    $message->to($emailto);
                    $message->subject('Job Application');
                    $message->attach($fileloc, array(
                            'as' => $fileName, 
                            'mime' => 'application/pdf')
                    );
                    $message->setBody('');
                }
            );

        $params['notif'] = 'Success';
        $params['message'] = 'Your CV has sucessfully uploaded!';
        $params['submit'] = 'notactive';
        $params['button'] = 'career';
        $params['id'] = $request->id;

        return view('landing-page.career.apply')->with($params);
    }

    public function applyVacancy($id){
        $params['id'] = $id;
        $params['notif'] = '';
        $params['message'] = '';
        $params['submit'] = 'active';
        $params['button'] = 'detail';

        return view('landing-page.career.apply')->with($params);
    }

    
    // public function itService(){
    //     return view('landing-page/it-service/services');
    // }

    /**
     * Store page 1
     * @return void
     */
    public function loginClient(Request $request) 
    {
        $this->validate($request,[
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        return view('landing-page/index');
    }

}
 
