$(document).ready(function(){
    datatable();
});

function datable(){
    $('.datatable').each(function(){
        var _token = $('body').data('csrf-token');
        var url = $('this').data('url');
        var column = $('this').data('column');

        $(this).DataTable({
            "searching": false,
            "processing": true,
            "serverSide": true,
            "oredering": true,
            "order": [[0, "decs"]],
            "columnDefs": [{
                "orderable" :false,
                "targets": "no-sort",
            }],
            "ajax": {
                "url": url,
                "dataType": "json",
                "type": "POST",
                "data": {
                    _token: _token,
                }
            },
            "column": column,
            "drawCallback": function(){
            }
        });
    });
}