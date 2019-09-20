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
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('administrator.job-vacancy.store') }}" method="POST">
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
                                        <input type="text" required class="form-control" name="job_title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label class="col-md-12">Range Minimum Salary</label>
                                        <input type="number" required class="form-control" name="min_salary">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-12">Range Maximum Salary</label>
                                        <input type="number" required class="form-control" name="max_salary">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Location</label>
                                    <div class="col-md-12">
                                        <input type="text" required class="form-control" name="company_location">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Company Name</label>
                                    <div class="col-md-12">
                                        <input type="text" required class="form-control" name="company_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Logo</label>
                                    <div class="col-md-12">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Status</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="status" required>
                                            <option value=""> - none - </option>
                                            <option value="1">Publish</option>
                                            <option value="0">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12">Job Description & Requirements</label>
                                    <div class="col-md-12">
                                        <textarea class="content" name="description_requirement" id="ckeditor"></textarea>
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
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('administrator.job-vacancy.store') }}" method="POST">
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
                                        <input type="text" required class="form-control" name="job_title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label class="col-md-12">Range Minimum Salary</label>
                                        <input type="number" required class="form-control" name="min_salary">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="col-md-12">Range Maximum Salary</label>
                                        <input type="number" required class="form-control" name="max_salary">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Location</label>
                                    <div class="col-md-12">
                                        <input type="text" required class="form-control" name="company_location">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">Company Name</label>
                                    <div class="col-md-12">
                                        <input type="text" required class="form-control" name="company_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Logo</label>
                                    <div class="col-md-12">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Status</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="status" required>
                                            <option value=""> - none - </option>
                                            <option value="1">Publish</option>
                                            <option value="0">Draft</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-12">Job Description & Requirements</label>
                                    <div class="col-md-12">
                                        <textarea class="content" name="description_requirement" id="ckeditor"></textarea>
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
    </script>
@endsection
@endsection
>>>>>>> 59d8442487a7f19d975d72d9b1d8a10a41c25f72
