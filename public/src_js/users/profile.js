
var Audit_trail = $('#my_audits').DataTable({
    processing: true,
    serverProcessing: true,
    order: [[0, 'desc']],
    ajax: '/user_profile/user-audit/'+$('#us_id').val(),
    columns: [
        { data: 'id', 'name': 'id' },
        { data: 'case_name', 'name': 'case_name' },
        { data: 'description', 'name': 'description' },
        { data: 'created_at', 'name': 'created_at' },
        { data: 'user_name', 'name': 'user_name' }
    ]
});

