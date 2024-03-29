<<<<<<< HEAD
@extends('layouts.administrator')

@section('title', 'Company Profile')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Form Company Profile</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="active">Company Profile</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('administrator.company-profile.store') }}" method="POST">
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
                                    <label class="col-md-12">Company Name</label>
                                    <div class="col-md-12">
                                    <input type="text" required class="form-control" name="company_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Location</label>
                                    <div class="col-md-12">
                                        <select required class="form-control" name="company_location">
                                        <option value="" selected>LOCATION</option>
                                        @foreach($provinsi as $item)
                                        <option value="{{$item->nama}}">{{$item->nama}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Logo</label>
                                    <div class="col-md-12">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Profile</label>
                                    <div class="col-md-12">
                                        <textarea class="content" name="profile" id="ckeditor"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <a href="{{ route('administrator.company-profile.index') }}" class="btn btn-sm btn-default waves-effect waves-light m-r-10"><i class="fa fa-arrow-left"></i> Back</a>
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

@section('title', 'Company Profile')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Form Company Profile</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0)">Dashboard</a></li>
                    <li class="active">Company Profile</li>
                </ol>
            </div>
        </div>
        <!-- .row -->
        <div class="row">
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('administrator.company-profile.store') }}" method="POST">
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
                                    <label class="col-md-12">Company Name</label>
                                    <div class="col-md-12">
                                    <input type="text" required class="form-control" name="company_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Location</label>
                                    <div class="col-md-12">
                                        <select required class="form-control" name="company_location">
                                        <option value="" selected>LOCATION</option>
                                        @foreach($provinsi as $item)
                                        <option value="{{$item->nama}}">{{$item->nama}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Logo</label>
                                    <div class="col-md-12">
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Profile</label>
                                    <div class="col-md-12">
                                        <textarea class="content" name="profile" id="ckeditor"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <br><br>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <a href="{{ route('administrator.company-profile.index') }}" class="btn btn-sm btn-default waves-effect waves-light m-r-10"><i class="fa fa-arrow-left"></i> Back</a>
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
