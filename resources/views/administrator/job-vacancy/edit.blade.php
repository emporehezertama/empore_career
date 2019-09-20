<<<<<<< HEAD
@extends('layouts.administrator')

@section('title', 'Job Vacancy')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Form Job Vacancy</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="active">Job Vacancy</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <!--form class="form-horizontal" enctype="multipart/form-data" action="{{ route('administrator.job-vacancy.update', $data->id) }}" method="POST"-->
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('job-vacancy/update', $data->id) }}" method="POST">
                <div class="col-md-12 p-l-0 p-r-0">
                    <div class="white-box">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12">Job Title</label>
                                    <div class="col-md-12">
                                        <select required class="form-control" name="job_title" value="{{$data->job_title}}">
                                        <option value="">JOB TITLE</option>
                                        @foreach($job as $item)
                                        <option <?php if($item->job_title == $data->job_title){ echo "selected";} ?> value="{{$item->job_title}}">{{$item->job_title}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label class="col-md-12">Range Minimum Salary</label>
                                        <input type="number" class="form-control" name="min_salary" value="{{$data->range_salary_bottom}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-12">Range Maximum Salary</label>
                                        <input type="number" class="form-control" name="max_salary" value="{{$data->range_salary_top}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Location</label>
                                    <div class="col-md-12">
                                        <select required class="form-control" name="company_location" value="{{$data->company_location}}">
                                        <option value="">LOCATION</option>
                                        @foreach($provinsi as $item)
                                        <option <?php if($item->nama == $data->company_location){ echo "selected";} ?> value="{{$item->nama}}">{{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Company Name</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="company_name" value="{{$data->company_name}}">
                                            <option value="" selected> COMPANY </option>
                                            @foreach($company as $item)
                                                <option <?php if($item->company_name == $data->company_name){ echo "selected";} ?> value="{{$item->company_name}}">{{$item->company_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Status</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="status" required>
                                            <option value=""> - none - </option>
                                            <option value="1" <?php if($data->status == 1){ echo "selected";}else{echo "";} ?>>Publish</option>
                                            <option value="0" <?php if($data->status == 0){ echo "selected";}else{echo "";} ?>>Draft</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Deadline</label>
                                    <div class="col-md-12">
                                        <input type="text" id="deadline" name="deadline" class="form-control datepicker" id="from" placeholder="" value="{{$data->deadline}}" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12">Job Description</label>
                                    <div class="col-md-12">
                                        <textarea class="content" name="description" id="ckeditor">{{$data->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Requirements</label>
                                    <div class="col-md-12">
                                        <textarea class="content" name="requirement" id="ckeditor2">{{$data->requirement}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <a href="{{ route('administrator.job-vacancy.index') }}" class="btn btn-sm btn-default waves-effect waves-light m-r-10"><i class="fa fa-arrow-left"></i> Back</a>
                                <button type="submit"  class="btn btn-sm btn-success waves-effect waves-light m-r-10" id="btn_submit"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br />
                    
                        <br style="clear: both;" />
                        <div class="clearfix"></div>
                    </div>
                </div>    
            </form>                    
        </div>
        <!-- /.row -->
        <!-- ============================================================== -->
    </div>
    <!-- /.container-fluid -->
    @extends('layouts.footer')
</div>
@section('footer-script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'ckeditor' );
        CKEDITOR.replace( 'ckeditor2' );
    </script>
@endsection
@endsection
=======
@extends('layouts.administrator')

@section('title', 'Job Vacancy')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Form Job Vacancy</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="active">Job Vacancy</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <!--form class="form-horizontal" enctype="multipart/form-data" action="{{ route('administrator.job-vacancy.update', $data->id) }}" method="POST"-->
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('job-vacancy/update', $data->id) }}" method="POST">
                <div class="col-md-12 p-l-0 p-r-0">
                    <div class="white-box">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        {{ csrf_field() }}
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12">Job Title</label>
                                    <div class="col-md-12">
                                        <select required class="form-control" name="job_title" value="{{$data->job_title}}">
                                        <option value="">JOB TITLE</option>
                                        @foreach($job as $item)
                                        <option <?php if($item->job_title == $data->job_title){ echo "selected";} ?> value="{{$item->job_title}}">{{$item->job_title}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label class="col-md-12">Range Minimum Salary</label>
                                        <input type="number" class="form-control" name="min_salary" value="{{$data->range_salary_bottom}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-12">Range Maximum Salary</label>
                                        <input type="number" class="form-control" name="max_salary" value="{{$data->range_salary_top}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Location</label>
                                    <div class="col-md-12">
                                        <select required class="form-control" name="company_location" value="{{$data->company_location}}">
                                        <option value="">LOCATION</option>
                                        @foreach($provinsi as $item)
                                        <option <?php if($item->nama == $data->company_location){ echo "selected";} ?> value="{{$item->nama}}">{{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Company Name</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="company_name" value="{{$data->company_name}}">
                                            <option value="" selected> COMPANY </option>
                                            @foreach($company as $item)
                                                <option <?php if($item->company_name == $data->company_name){ echo "selected";} ?> value="{{$item->company_name}}">{{$item->company_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Status</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="status" required>
                                            <option value=""> - none - </option>
                                            <option value="1" <?php if($data->status == 1){ echo "selected";}else{echo "";} ?>>Publish</option>
                                            <option value="0" <?php if($data->status == 0){ echo "selected";}else{echo "";} ?>>Draft</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Deadline</label>
                                    <div class="col-md-12">
                                        <input type="text" id="deadline" name="deadline" class="form-control datepicker" id="from" placeholder="" value="{{$data->deadline}}" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12">Job Description</label>
                                    <div class="col-md-12">
                                        <textarea class="content" name="description" id="ckeditor">{{$data->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Requirements</label>
                                    <div class="col-md-12">
                                        <textarea class="content" name="requirement" id="ckeditor2">{{$data->requirement}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <a href="{{ route('administrator.job-vacancy.index') }}" class="btn btn-sm btn-default waves-effect waves-light m-r-10"><i class="fa fa-arrow-left"></i> Back</a>
                                <button type="submit"  class="btn btn-sm btn-success waves-effect waves-light m-r-10" id="btn_submit"><i class="fa fa-save"></i> Save</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br />
                    
                        <br style="clear: both;" />
                        <div class="clearfix"></div>
                    </div>
                </div>    
            </form>                    
        </div>
        <!-- /.row -->
        <!-- ============================================================== -->
    </div>
    <!-- /.container-fluid -->
    @extends('layouts.footer')
</div>
@section('footer-script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'ckeditor' );
        CKEDITOR.replace( 'ckeditor2' );
    </script>
@endsection
@endsection
>>>>>>> 59d8442487a7f19d975d72d9b1d8a10a41c25f72
