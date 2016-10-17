var routes = $('#routes').DataTable({
    processing: true,
    serverSide: true,
    ajax: 'load-routes',
    "aaSort": [[ 0, 'desc' ]],
    columns: [
        { data: 'id', 'name': 'id' },
        { data: 'route_name', 'name': 'route_name' },
        { data: 'url', 'name': 'url' },
        { data: 'parent_route', 'name': 'parent_route' },
        { data: 'route_status', 'name': 'route_status' }
    ]
});

$('#refresh-routes').on('click', function(){
    routes.ajax.reload();
});

$('add-route-form').on('submit', function () {
    $.ajax({
        url: 'add-route',
        type: 'POST',
        data: $(this).serialize(),
        dataType: 'json',
        success: function(data){
            if(data.success){
                routes.ajax.reload();
            }else if(!data.success){
                // show errors
            }
        }
    });
});