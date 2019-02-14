 $('#data_table_no_copy').DataTable({
    dom: 'Bfrtip',
     buttons: []
});

$('#data_table_no_copy2').DataTable({
    dom: 'Bfrtip',
     buttons: []
});

$('#data_table_no_copy3').DataTable({
    dom: 'Bfrtip',
     buttons: []
});


$('#data_table').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ],
    pageLength: 100
});

$('#data_table2').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});

$('#data_table3').DataTable({
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});

/**
 * [numberWithComma description]
 * @param  {[type]} x [description]
 * @return {[type]}   [description]
 */
function numberWithComma(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

$('.price_format').priceFormat({
    prefix: '',
    centsSeparator: '.',
    thousandsSeparator: ',',
    clearOnEmpty: true,
    centsLimit : 0
});

$("#data_table_no_search").DataTable({
    dom: 'Bfrtip',
    searching: false,
    pageLength: 30,
    buttons: [
        
    ]
});
$("#data_table_no_pagging").DataTable({
    dom: 'Bfrtip',
    searching: false,
    pageLength: 30,
    bPaginate: false,
    bInfo: false,
    buttons: [
        
    ]
});

/*
function confirm_delete(msg, el)
{
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        icon: "warning",
        showCancelButton: true,
        buttons: {
            cancel: {
                text: "No, cancel!",
                value: null,
                visible: true,
                className: "btn-warning",
                closeModal: true,
            },
            confirm: {
                text: "Yes, delete it!",
                value: true,
                visible: true,
                className: "",
                closeModal: false
            }
        }
    }).then(isConfirm => {
        if (isConfirm) {
            $(el).parent().submit();
        }
    });
}
*/

function _confirm(msg)
{
    swal({
        title: "Are you sure?",
        text: msg,
        icon: "warning",
        showCancelButton: true,
        buttons: {
            cancel: {
                text: "No, cancel!",
                value: null,
                visible: true,
                className: "btn-warning",
                closeModal: true,
            },
            confirm: {
                text: "Yes, publish it!",
                value: true,
                visible: true,
                className: "",
                closeModal: false
            }
        }
    }).then(isConfirm => {
        if (isConfirm) {
            document.location = url;
        }
    });

    return false;
}





/**
 * [alert_ description]
 * @param  {[type]} msg [description]
 * @return {[type]}     [description]
 */
function _alert(msg)
{
  if(msg == "") return false;

  bootbox.alert({
    title : "<i class=\"fa fa-warning\"></i> EMPORE SYSTEM",
    closeButton: false,
    message: msg,
     buttons: {
        ok: {
            label: 'OK',
            className: 'btn btn-sm btn-success'
        },
    },
  })
}

/**
 * [_confirm description]
 * @param  {[type]} msg [description]
 * @return {[type]}     [description]
 */
function confirm_delete(msg, el)
{
  if(msg == "") return false;

  bootbox.confirm({
    title : "<i class=\"fa fa-warning\"></i> EMPORE SYSTEM",
    message: msg,
    closeButton: false,
    buttons: {
        confirm: {
            label: 'Yes',
            className: 'btn btn-sm btn-success'
        },
        cancel: {
            label: 'No',
            className: 'btn btn-sm btn-danger'
        }
    },
    callback: function (result) {
      if(result)
      { 
           $(el).parent().submit();
      }
      
    }
  });

  return false;
}