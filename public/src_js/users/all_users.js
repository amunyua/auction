var User = {
    splash: function(type, content, modal){
        switch(type){
            case 'success':
                var html = '<div class="alert alert-success">';
                html += '<button class="close" data-dismiss="alert">&times;</button>';
                html += '<strong>Success!</strong> '+content;
                html += '</div>';
                return html;
                break;

            case 'warning':
                var html = '<div class="alert alert-warning">';
                html += '<button class="close" data-dismiss="alert">&times;</button>';
                html += '<strong>Warnings!</strong> ';

                for(var key in content.errors) {
                    var errors = content.errors[key];
                    for(var i = 0; i < errors.length; i++){
                        html += '<li>'+errors[i]+'</li>';
                    }
                }

                html += '</div>';
                return html;
                break;

            case 'error':
                var html = '<div class="alert alert-error">';
                html += '<button class="close" data-dismiss="alert">&times;</button>';
                html += '<strong>Error!</strong> '+content;
                html += '</div>';
                return html;
                break;
        }
    },
    resetFields: function(){
        $('input[type="number"], input[type="text"], input[type="email"], textarea').val('');
        $("#sysaction").select2("val", "");
    }
};

var User = $('#all_users').DataTable({
    processing: true,
    serverProcessing: true,
    order: [[0, 'desc']],
    ajax: 'load-users',
    columns: [
        { data: 'id', 'name': 'id' },
        { data: 'user_name', 'name': 'user_name' },
        { data: 'email', 'name': 'email' },
        { data: 'status', 'name': 'status' },
        { data: 'created_at', 'name': 'created_at' },
        { data: 'manage', 'name': 'manage' }
    ]
});

$('#refresh-btn').click(function(){
    users.ajax.reload();
});

$('#all_users > tbody > tr').live('click', function(event){
    if(event.ctrlKey) {
        $(this).toggleClass('info');
    }
    else {
        if ( $(this).hasClass('info') ) {
            $('#all_users > tbody > tr').removeClass('info');
        }
        else {
            $('#all_users > tbody > tr').removeClass('info');
            $(this).toggleClass('info');
        }
    }
});

$('#reset-pass-btn').on('click', function(){
    var records = $('tr.info').length;

    if(records == 1){
        $(this).attr('data-toggle', 'modal');
        var edit_id = $('tr.info').find('td:first').text();

        if(edit_id){
            $.ajax({
                url: 'user-data/'+edit_id,
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('#status').val(data['status']);
                }
            });
        }
    }else if(records > 1) {
        $(this).removeAttr('data-toggle');
        alert('You can only edit one record at a time!');
    }else{
        $(this).removeAttr('data-toggle');
        alert('You must select a record first!');
    }
});

$('#delete-user-btn').on('click', function(){
    var records = $('tr.info').length;
    if(records) {
        if (confirm('Are you sure you want to delete the selected record(s)?')) {
            var ids = [];
            $('tr.info').each(function () {
                ids.push($(this).find('td:first').text());
            });

            if (ids.length) {
                $.ajax({
                    url: 'delete-user',
                    type: 'POST',
                    data: {
                        ids: ids,
                        _token: $('input[name="_token"]').val()
                    },
                    dataType: 'json',
                    success: function (data) {
                        if (data.success) {
                            // alert success
                            var success = User.splash('success', 'Successfully deleted!');
                            $('#feedback').html(success);

                            // reload grid
                            users.ajax.reload();

                            //remove alert after 3 seconds
                            setTimeout(function(){
                                $('#feedback').slideUp('slow');
                            }, 3000);
                        } else if (!data.success) {
                            var error = User.splash('warnings', 'Failed to delete the selected record(s)');
                            $('#feedback').html(error);
                        }
                    }
                });
            }
        }
    }else{
        alert('You must select at least one record!');
    }
});