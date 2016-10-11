<!-- BEGIN FORM -->
    <div class="row-fluid">
        <div class="span6">
            <div class="control-group">
                <label for="county" class="control-label">Supplier</label>
                <div class="controls">
                    <select name="masterfile-id" class="span12 live-search" id="select2_sample79" >
                        <option value="">--Select supplier--</option>
                        @if(count($suppliers))
                            @foreach($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->surname.' '.$supplier->firstname }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="control-group">
                <label for="warehouse" class="control-label">Warehouse</label>
                <div class="controls">
                    <select name="warehouse_id" class="span12" id="select2_sample79" >
                        <option value="">--Select warehouse--</option>
                        @if(count($warehouses))
                            @foreach($warehouses as $warehouse)
                                <option value="{{ $warehouse->id }}">{{ $warehouse->warehouse_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        </div>



    <div class="row-fluid">
        <div class="span6">
            <div class="control-group">
                <label for="warehouse" class="control-label">Transaction type</label>
                <div class="controls">
                    <select name="transaction_type_id" class="span12" id="select2_sample79" >
                        <option value="">--Select transaction type--</option>
                        @if(count($transaction_types))
                            @foreach($transaction_types as $transaction_type)
                                <option value="{{ $transaction_type->id }}">{{ $transaction_type->transaction_type_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="control-group">
                <label for="transaction-category" class="control-label">Transaction category</label>
                <div class="controls">
                    <select name="transaction_category_id" class="span12" id="select2_sample79" >
                        <option value="">--Select transaction category--</option>
                        @if(count($transaction_categories))
                            @foreach($transaction_categories as $transaction_category)
                                <option value="{{ $transaction_category->id }}">{{ $transaction_category->transaction_category_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12">
            <div class="control-group">
                <div action="{{ url('upload-inventory-pics') }}" class="dropzone" id="my-awesome-dropzone">
                    {{ csrf_field() }}
                </div>
            </div>
        </div>
        </div>
    </div>




<!-- END FORM -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
