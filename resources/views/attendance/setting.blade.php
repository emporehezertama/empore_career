@extends('layouts.administrator')

@section('title', 'General Setting')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Attendance Setting</h4> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12 text-right">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal_add"><i class="fa fa-plus"></i> Add Setting</button>
            </div>
        </div>
        <div class="row">
            <form class="form-horizontal" id="form-setting" name="form_setting" enctype="multipart/form-data" action="{{ route('administrator.setting.save') }}" method="POST">
                {{ csrf_field() }}
                <div class="col-md-12 p-l-0 p-r-0">
                    <div class="white-box">
                        <table class="data_table_no_pagging table table-background">
                            <thead>
                                <tr>
                                    <th style="width: 80px;">No</th>
                                    <th>Shift</th>
                                    <th>Clock In</th>
                                    <th>Clock Out</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>
                                        <a href="#" class="edit_inline" data-name="shift" data-pk="{{ $item->id }}" data-type="text" data-placement="right" data-title="Shift">
                                        {{ $item->shift }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="edit_inline" data-name="clock_in" data-pk="{{ $item->id }}" data-type="text" data-placement="right" data-title="Clock In">
                                        {{ $item->clock_in }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="#" class="edit_inline" data-name="clock_out" data-pk="{{ $item->id }}" data-type="text" data-placement="right" data-title="Clock Out">
                                        {{ $item->clock_out }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" onclick="_confirm('Delete Data ?', '{{ route('attendance-setting.delete', $item->id) }}')" class="text-danger" style="font-size: 15px;"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>                   
        </div>
    </div>
    @include('layouts.footer')
</div>
<!-- sample modal content -->
<div id="modal_add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Attendance Setting</h4>
            </div>
          <form class="form-horizontal" autocomplete="off" enctype="multipart/form-data" action="{{ route('attendance-setting.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="modal-body">
                <div class="form-group">
                    <label class="form-label col-md-3">Shift</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="shift" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label col-md-3">Clock In</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="clock_in" required />
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label col-md-3">Clock Out</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="clock_out" required />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect btn-sm pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-info waves-effect btn-sm pull-right"><i class="fa fa-save"></i> Save</button>
            </div>
          </form>
        </div>
    </div>
</div>
<style type="text/css" media="screen">
    .clockpicker-popover { z-index: 9999 !important; }
</style>
@section('js')
<link href="{{ asset('admin-css/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.css') }}" rel="stylesheet">
<script src="{{ asset('admin-css/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js') }}"></script>
<script type="text/javascript">

$(function(){
    //toggle `popup` / `inline` mode
    //$.fn.editable.defaults.mode = 'toggle';     
    $('.edit_inline').editable(
    {
        url: '{{ route('ajax.post-edit-inline') }}',
        ajaxOptions:{
          type:'post'
        },
        params : {'table' : 'absensi_setting'},
        success: function(data) {
            console.log(data);
        }
      }
    );

    // Clock pickers
    $("input[name='clock_in'], input[name='clock_out']").clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
});
</script>
@endsection
@endsection
