/**
 * Created by joel on 10/7/16.
 */
$('#table1 > tbody > tr').live('click', function(event){
    if(event.ctrlKey) {
        $(this).toggleClass('info');
    }
    else {
        if ( $(this).hasClass('info') ) {
            $('#table1 > tbody > tr').removeClass('info');
        }
        else {
            $('#table1 > tbody > tr').removeClass('info');
            $(this).toggleClass('info');
        }
    }
});

//get the address id
$('#table1').on('click', 'tr', function() {
    edit_id = $(this).children('td:first').text();
    $('#edit_id').val(edit_id);
    $('#delete_id').val(edit_id);

    //prepare to show the dialog
    $('#edit_address').attr('data-toggle', 'modal');
    $('#del_address').attr('data-toggle', 'modal');

    //get attribute details and place then on the edit modal
    $.ajax({
        type: 'GET',
        url: 'mf_profile/'+edit_id,
        dataType: 'json',
        success: function(data){
            $('#county').val(data['county']);
            $('#town').val(data['town']);
            $('#postal_address').val(data['postal_address']);
            $('#address_type_name').val(data['address_type_name']);
            $('#postal_code').val(data['postal_code']);
            $('#ward').val(data['ward']);
            $('#building').val(data['building']);
            $('#house_no').val(data['house_no']);
            $('#street').val(data['street']);
            $('#phone').val(data['phone']);
        }
    });
});

$('#edit_address').on('click', function(){
    var edit_id = $('#edit_id').val();
    if(edit_id == ''){
        alert('You must select a record first!');
    }
});

$('#del_address').on('click', function(){
    var delete_id = $('#delete_id').val();
    if(delete_id == ''){
        alert('You must select a record first!');
    }
});