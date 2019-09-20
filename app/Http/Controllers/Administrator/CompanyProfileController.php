<<<<<<< HEAD
<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use App\Models\Provinsi;

class CompanyProfileController extends Controller
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
        $params['data'] = CompanyProfile::orderBy('id', 'DESC')->paginate(50);

        return view('administrator.company-profile.index')->with($params);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {   
        $params['provinsi'] = Provinsi::all();
        
        return view('administrator.company-profile.create')->with($params);
    }

    /**
     * [edit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function edit($id)
    {
        $params['data'] = CompanyProfile::where('id', $id)->first();
        $params['provinsi'] = Provinsi::all();

        return view('administrator.company-profile.edit')->with($params);
    }

    /**
     * [update description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function update(Request $request, $id)
    {
        $data                       = CompanyProfile::where('id', $id)->first();
        $data->company_name         = $request->company_name;
        $data->company_location     = $request->company_location;
        $data->profile              = $request->profile;

        if (request()->hasFile('image'))
         {
             $file = $request->file('image');
             $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();

             $destinationPath = public_path('/storage/company-logo/');
             $file->move($destinationPath, $fileName);

             $data->company_logo = $fileName;
         }

        $data->save();

        return redirect()->route('administrator.company-profile.index')->with('message-success', 'Data successfully saved');
    }   

    /**
     * [desctroy description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function destroy($id)
    {
        $data = CompanyProfile::where('id', $id)->first();
        $data->delete();

        return redirect()->route('administrator.company-profile.index')->with('message-sucess', 'Data successfully deleted');
    } 

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $data                       = new CompanyProfile();
        $data->company_name         = $request->company_name;
        $data->company_location     = $request->company_location;
        $data->profile              = $request->profile;
        
        if (request()->hasFile('image'))
         {
             $file = $request->file('image');
             $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();

             $destinationPath = public_path('/storage/company-logo/');
             $file->move($destinationPath, $fileName);

             $data->company_logo = $fileName;
         }
        
        $data->save();

        return redirect()->route('administrator.company-profile.index')->with('message-success', 'Data successfully saved !');
    }
}
=======
<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use App\Models\Provinsi;

class CompanyProfileController extends Controller
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
        $params['data'] = CompanyProfile::orderBy('id', 'DESC')->paginate(50);

        return view('administrator.company-profile.index')->with($params);
    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create()
    {   
        $params['provinsi'] = Provinsi::all();
        
        return view('administrator.company-profile.create')->with($params);
    }

    /**
     * [edit description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function edit($id)
    {
        $params['data'] = CompanyProfile::where('id', $id)->first();
        $params['provinsi'] = Provinsi::all();

        return view('administrator.company-profile.edit')->with($params);
    }

    /**
     * [update description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function update(Request $request, $id)
    {
        $data                       = CompanyProfile::where('id', $id)->first();
        $data->company_name         = $request->company_name;
        $data->company_location     = $request->company_location;
        $data->profile              = $request->profile;

        if (request()->hasFile('image'))
         {
             $file = $request->file('image');
             $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();

             $destinationPath = public_path('/storage/company-logo/');
             $file->move($destinationPath, $fileName);

             $data->company_logo = $fileName;
         }

        $data->save();

        return redirect()->route('administrator.company-profile.index')->with('message-success', 'Data successfully saved');
    }   

    /**
     * [desctroy description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function destroy($id)
    {
        $data = CompanyProfile::where('id', $id)->first();
        $data->delete();

        return redirect()->route('administrator.company-profile.index')->with('message-sucess', 'Data successfully deleted');
    } 

    /**
     * [store description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function store(Request $request)
    {
        $data                       = new CompanyProfile();
        $data->company_name         = $request->company_name;
        $data->company_location     = $request->company_location;
        $data->profile              = $request->profile;
        
        if (request()->hasFile('image'))
         {
             $file = $request->file('image');
             $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();

             $destinationPath = public_path('/storage/company-logo/');
             $file->move($destinationPath, $fileName);

             $data->company_logo = $fileName;
         }
        
        $data->save();

        return redirect()->route('administrator.company-profile.index')->with('message-success', 'Data successfully saved !');
    }
}
>>>>>>> 59d8442487a7f19d975d72d9b1d8a10a41c25f72
