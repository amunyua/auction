var items = $('#items').DataTable({
    processing: true,
    serverSide: false,
    order: [[ 0, "desc" ]],
    ajax: 'load-routes',
    columns: [
        { data: 'id', 'name': 'id' },
        { data: 'item_name', 'name': 'item_name' },
        { data: 'category_id', 'name': 'category_id' },
        { data: 'sub_category_id', 'name': 'sub_category_id' },
        { data: 'purchase_price', 'name': 'purchase_price' },
        { data: 'purchase_price', 'name': 'purchase_price' }
    ]
});

$('.profile').on('click', function () {
    var id = $(this).attr('profile-id');
    $.ajax({
        type:'GET',
        url: 'item-details/'+id,
        dataType: 'json',
        success: function (data) {
            $('#item-name').text(data['item_name']);
        }
    });
})
$('.live_search').select2();