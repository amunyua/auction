@push('css')
    <link href="{{ URL::asset('src_js/pnotify/pnotify.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('src_js/pnotify/animate.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('src_js/pnotify/pnotify.brighttheme.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('src_js/pnotify/pnotify.buttons.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('js')
    {{--pnotify script files--}}
    <script type="text/javascript" src="{{ URL::asset('src_js/pnotify/pnotify.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('src_js/pnotify/pnotify.buttons.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('src_js/pnotify/pnotify.animate.js') }}"></script>

    <script>
        UINestable.init();

        $('input:checkbox').click(function(){
            var checked = $(this).is(':checked');
            var route_id = $(this).val();
            var role = $('#nxt_role').val();

            // prepare the data
            var data = {
                _token: $('input[name="_token"]').val(),
                route: route_id,
                role: role
            };

            // attach or detach based on the user demand
            if(checked){
                if(route_id != ''){
                    $.ajax({
                        url: 'attach-to-role',
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        success: function (data) {
                            if(data.success){
                                // do a success pnotify
                                new PNotify({
                                    title: 'Attached',
                                    text: 'Route has been allocated',
                                    type: 'success',
                                    buttons: {
                                        closer_hover: false,
                                        sticker_hover: false
                                    },
                                    animate: {
                                        animate: true,
                                        in_class: 'rotateInDownLeft',
                                        out_class: 'rotateOutUpRight'
                                    }
                                });
                            }else if(!data.success){
                                // do a fail pnotify
                                new PNotify({
                                    title: 'Warning',
                                    text: data.message,
                                    type: 'error',
                                    buttons: {
                                        closer_hover: false,
                                        sticker_hover: false
                                    },
                                    animate: {
                                        animate: true,
                                        in_class: 'rotateInDownLeft',
                                        out_class: 'rotateOutUpRight'
                                    }
                                });
                            }
                        }
                    });
                }
            }else{
                if(route_id != ''){
                    $.ajax({
                        url: 'detach-from-role',
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        success: function (data) {
                            if(data.success){
                                // do a success pnotify
                                new PNotify({
                                    title: 'Detached',
                                    text: 'Route has been detached',
                                    type: 'success',
                                    buttons: {
                                        closer_hover: false,
                                        sticker_hover: false
                                    },
                                    animate: {
                                        animate: true,
                                        in_class: 'rotateInDownLeft',
                                        out_class: 'rotateOutUpRight'
                                    }
                                });
                            }else{
                                // do a fail pnotify
                                new PNotify({
                                    title: 'Warning',
                                    text: data.message,
                                    type: 'error',
                                    buttons: {
                                        closer_hover: false,
                                        sticker_hover: false
                                    },
                                    animate: {
                                        animate: true,
                                        in_class: 'rotateInDownLeft',
                                        out_class: 'rotateOutUpRight'
                                    }
                                });
                            }
                        }
                    });
                }
            }
        });
    </script>
@endpush

{{--hidden field ya serialized--}}
<input type="hidden" id="nestable_list_1_output" class="m-wrap span12"/>
<input type="hidden" id="nxt_role"/>
{{ csrf_field() }}

<div class="widget-body">
    <div class="dd" id="nestable_list_1">
        <?php
            $role = new \App\Http\Controllers\UserRoleController;
            $role->getRoutes(NULL);
        ?>
    </div>
</div>