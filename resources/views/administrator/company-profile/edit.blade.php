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
            <form class="form-horizontal" enctype="multipart/form-data" action="{{ route('company-profile/update', $data->id) }}" method="POST">
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
                                        <input type="text" required class="form-control" name="company_name" value="{{$data->company_name}}">
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Location</label>
                                    <div class="col-md-12">
                                        <select required class="form-control" name="company_location" value="{{$data->company_location}}">
                                        <option value="" selected>LOCATION</option>
                                        @foreach($provinsi as $item)
                                        <option <?php if($data->company_location == $item->nama){echo "selected";} ?> value="{{$item->nama}}">{{$item->nama}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Company Logo</label>
                                    <div class="col-md-12">
                                        <input type="file" name="image" class="form-control">
                                        @if(!empty($data->company_logo))
                                        <div class="col-md-3">
                                            <img style="width: 100%; height: auto;" src="{{ asset('storage/company-logo/'. $data->company_logo) }}" />
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Profile</label>
                                    <div class="col-md-12">
                                        <textarea class="content" name="profile" id="ckeditor" value="{!!$data->profile!!}">{!!$data->profile!!}</textarea>
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
