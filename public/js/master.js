$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
});
function saveMaster(masterName='') {
    $(".error").remove();
    $.ajax({
        url: '/admin/masters/'+masterName+'/save' ,
        type: "POST",
        dataType:"JSON",
        data: $('#save_master').serialize(),
        success: function( response ) {
            if(response.status == 'input-error') {
                $.each(response.errors, function(key, value) {
                    $('<p style="color:red" class="error">'+value+'</p>').insertAfter('#'+key).slideDown();
                });
            } else if(response.status == 'error'){
                $('<p style="color:red" class="error">'+response.msg+'</p>').insertAfter('.card-body').slideDown();
            } else {
                $('#save_master')[0].reset();
                $('<p style="color:green" class="error">'+response.msg+'</p>').insertAfter('.card-body').slideDown();
            }
        }
    });
}