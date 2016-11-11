/**
 * Created by joel on 11/10/16.
 */
var staff = $('#all_staff').DataTable({
    processing: true,
    serverProcessing: true,
    order: [[0, 'desc']],
    ajax: 'all-staff',
    columns: [
        { data: 'id', 'name': 'id' },
        { data: 'reg_date', 'name': 'reg_date' },
        { data: 'full_name', 'name': 'full_name' },
        { data: 'b_role', 'name': 'b_role' },
        { data: 'customer_type_name', 'name': 'customer_type_name' },
        { data: 'email', 'name': 'email' }
    ]
});

