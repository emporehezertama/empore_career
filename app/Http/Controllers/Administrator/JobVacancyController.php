<<<<<<< HEAD
<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobVacancy;
use App\Models\CompanyProfile;
use App\Models\Provinsi;
use App\Models\JobList;

class JobVacancyController extends Controller
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
        $params['data'] = JobVacancy::orderBy('id', 'DESC')->paginate(50);

        return view('administrator.job-vacancy.index')->with($params);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {   
        $params['company'] = CompanyProfile::all();
        $params['job'] = JobList::all();
        $params['provinsi'] = Provinsi::all();
        return view('administrator.job-vacancy.create')->with($params);
    }

    /**
     * [edit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function edit($id)
    {
        $params['data'] = JobVacancy::where('id', $id)->first();
        $params['provinsi'] = Provinsi::all();
        $params['company'] = CompanyProfile::all();
        $params['job'] = JobList::all();

        return view('administrator.job-vacancy.edit')->with($params);
    }

    /**
     * [update description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function update(Request $request, $id)
    {
        $data                                       = JobVacancy::where('id', $id)->first();
        $data->job_title                            = $request->job_title;
        $data->description                          = $request->description;
        $data->requirement                          = $request->requirement;
        $data->status                               = $request->status;
        $data->deadline                             = $request->deadline;
        $data->company_name                         = $request->company_name;
        $data->company_location                     = $request->company_location;
        $data->range_salary_bottom                  = $request->min_salary;
        $data->range_salary_top                     = $request->max_salary;

        $data->save();

        return redirect()->route('administrator.job-vacancy.index')->with('message-success', 'Data successfully saved');
    }   

    /**
     * [desctroy description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function destroy($id)
    {
        $data = JobVacancy::where('id', $id)->first();
        $data->delete();

        return redirect()->route('administrator.job-vacancy.index')->with('message-sucess', 'Data successfully deleted');
    } 

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $data                           = new JobVacancy();
        $data->job_title                = $request->job_title;
        $data->description              = $request->description;
        $data->requirement              = $request->requirement;
        $data->status                   = $request->status;
        $data->deadline                 = $request->deadline;
        $data->company_name             = $request->company_name;
        $data->company_location         = $request->company_location;
        $data->range_salary_bottom      = $request->min_salary;
        $data->range_salary_top         = $request->max_salary;
       
        
        $data->save();

        return redirect()->route('administrator.job-vacancy.index')->with('message-success', 'Data successfully saved !');
    }
}
=======
<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobVacancy;
use App\Models\CompanyProfile;
use App\Models\Provinsi;
use App\Models\JobList;

class JobVacancyController extends Controller
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
        $params['data'] = JobVacancy::orderBy('id', 'DESC')->paginate(50);

        return view('administrator.job-vacancy.index')->with($params);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {   
        $params['company'] = CompanyProfile::all();
        $params['job'] = JobList::all();
        $params['provinsi'] = Provinsi::all();
        return view('administrator.job-vacancy.create')->with($params);
    }

    /**
     * [edit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function edit($id)
    {
        $params['data'] = JobVacancy::where('id', $id)->first();
        $params['provinsi'] = Provinsi::all();
        $params['company'] = CompanyProfile::all();
        $params['job'] = JobList::all();

        return view('administrator.job-vacancy.edit')->with($params);
    }

    /**
     * [update description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function update(Request $request, $id)
    {
        $data                                       = JobVacancy::where('id', $id)->first();
        $data->job_title                            = $request->job_title;
        $data->description                          = $request->description;
        $data->requirement                          = $request->requirement;
        $data->status                               = $request->status;
        $data->deadline                             = $request->deadline;
        $data->company_name                         = $request->company_name;
        $data->company_location                     = $request->company_location;
        $data->range_salary_bottom                  = $request->min_salary;
        $data->range_salary_top                     = $request->max_salary;

        $data->save();

        return redirect()->route('administrator.job-vacancy.index')->with('message-success', 'Data successfully saved');
    }   

    /**
     * [desctroy description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function destroy($id)
    {
        $data = JobVacancy::where('id', $id)->first();
        $data->delete();

        return redirect()->route('administrator.job-vacancy.index')->with('message-sucess', 'Data successfully deleted');
    } 

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $data                           = new JobVacancy();
        $data->job_title                = $request->job_title;
        $data->description              = $request->description;
        $data->requirement              = $request->requirement;
        $data->status                   = $request->status;
        $data->deadline                 = $request->deadline;
        $data->company_name             = $request->company_name;
        $data->company_location         = $request->company_location;
        $data->range_salary_bottom      = $request->min_salary;
        $data->range_salary_top         = $request->max_salary;
       
        
        $data->save();

        return redirect()->route('administrator.job-vacancy.index')->with('message-success', 'Data successfully saved !');
    }
}
>>>>>>> 59d8442487a7f19d975d72d9b1d8a10a41c25f72
