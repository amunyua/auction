
var Audit_trails = $('#audit').DataTable({
    processing: true,
    serverProcessing: true,
    order: [[0, 'desc']],
    ajax: 'load-audit',
    columns: [
        { data: 'id', 'name': 'id' },
        { data: 'case_name', 'name': 'case_name' },
        { data: 'description', 'name': 'description' },
        { data: 'created_at', 'name': 'created_at' },
        { data: 'user_name', 'name': 'user_name' }
    ]
});

$('#refresh-btn').click(function(){
    Audit_trails.ajax.reload();
});

$('#audit > tbody > tr').live('click', function(event){
    if(event.ctrlKey) {
        $(this).toggleClass('info');
    }
    else {
        if ( $(this).hasClass('info') ) {
            $('#audit > tbody > tr').removeClass('info');
        }
        else {
            $('#audit > tbody > tr').removeClass('info');
            $(this).toggleClass('info');
        }
    }
});