<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobVacancy;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params['data'] = Applicant::select('applicant.*', 'job_vacancy.job_title')
                                    ->join('job_vacancy', 'job_vacancy.id', '=', 'applicant.id_job_vacancy')
                                    ->orderBy('applicant.id', 'DESC')->paginate(50);

        return view('administrator.applicant.index')->with($params);
    }

    /**
     * [create description]
     * @return [type] [description]
     */

    /**
     * [edit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */


    /**
     * [update description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */


    /**
     * [desctroy description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function destroy($id)
    {
        $data = Applicant::where('id', $id)->first();
        $data->delete();

        return redirect()->route('administrator.applicant.index')->with('message-sucess', 'Data successfully deleted');
    } 

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
   
    public function download($id)
    {
        $data   = Applicant::where('id', $id)->first();
        $filename = $data->file;
        $path = public_path('storage/cv/');
        return response()->download($path.$filename);
    }
}
