<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\JobList;
use App\Models\CompanyProfile;

class JobListController extends Controller
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
        $params['data'] = JobList::orderBy('id', 'DESC')->paginate(50);

        return view('administrator.job-list.index')->with($params);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {   
        return view('administrator.job-list.create');
    }

    /**
     * [edit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function edit($id)
    {
        $params['data'] = JobList::where('id', $id)->first();

        return view('administrator.job-list.edit')->with($params);
    }

    /**
     * [update description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function update(Request $request, $id)
    {
        $data                       = JobList::where('id', $id)->first();
        $data->job_title            = $request->job_title;

        $data->save();

        return redirect()->route('administrator.job-list.index')->with('message-success', 'Data successfully saved');
    }   

    /**
     * [desctroy description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function destroy($id)
    {
        $data = JobList::where('id', $id)->first();
        $data->delete();

        return redirect()->route('administrator.job-list.index')->with('message-sucess', 'Data successfully deleted');
    } 

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $data                                   = new JobList();
        $data->job_title                        = $request->job_title;
        
        $data->save();

        return redirect()->route('administrator.job-list.index')->with('message-success', 'Data successfully saved !');
    }
}
