$('#add-warehouse').click(function() {

    var div =$("div.warehouse.init")
        .first()
        .clone();
    div.insertBefore($('div.row-fluid.more_warehouses'));
    //     .find("input").attr("name",function(i,oldVal) {
    //     return oldVal.replace(/\[(\d+)\]/,function(_,m){
    //         return "[" + (+m + 1) + "]";
    //     });
    // });

    return false;

});

$('.live-search').select2();