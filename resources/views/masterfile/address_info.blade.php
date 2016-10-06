
    <a href="#add_address" class="btn btn-small btn-primary tooltips m-wrap" data-toggle="modal" data-original-title="Add New Address" ><i class="icon-plus"></i></a>&nbsp;
    <a href="#edit_address" class="btn btn-small btn-warning tooltips m-wrap" data-original-title="Edit Address" ><i class="icon-edit"></i></a>&nbsp;
    <a href="#del_address" class="btn btn-small btn-danger tooltips m-wrap" data-original-title="Delete Address" ><i class="icon-trash"></i></a>

    <table id="table1" class="live_table table table-bordered">
        <thead>
            <tr>
                <th>Address#</th>
                <th>Postal Address</th>
                <th>County</th>
                <th>Address Type</th>
                <th>Phone#</th>
                <th>Town</th>
                <th>Ward</th>
                <th>Street</th>
                <th>Building</th>
                <th>House No.</th>
            </tr>
        </thead>
    <tbody>
        @if(count($addresses))
            @foreach($addresses as $address)
                <tr>
                    <td>{{ $address->id }}</td>
                    <td>{{ $address->postal_address }}</td>
                    <td>{{ $address->county }}</td>
                    <td>{{ $address->address_type_name }}</td>
                    <td>{{ $address->phone }}</td>
                    <td>{{ $address->town }}</td>
                    <td>{{ $address->ward }}</td>
                    <td>{{ $address->street }}</td>
                    <td>{{ $address->building }}</td>
                    <td>{{ $address->house }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>

<!-- begin add address modal -->
<form action="{{ url('mf_profile/'.$mf->id) }}" method="post"> {{--passing id to form--}}
    {{ csrf_field() }}
    <div id="add_address" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel1">Add New Address</h3>
        </div>
        <div class="modal-body">
            <div class="control-group">
                <label for="county" class="control-label">County:</label>
                <div class="controls">
                    <select name="county" class="span12 live_search" >
                        <option value="">--Select County--</option>
                        @if(count($counties))
                            @foreach($counties as $county)
                                <option value="{{ $county->county_code }}" {{ (old('county') == $county->county_code) ? 'selected': '' }}>{{ $county->county_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label for="town" class="control-label">Town:</label>
                <div class="controls">
                    <input type="text" name="town" value="{{ old('town') }}" class="span12" >
                </div>
            </div>

            <div class="control-group">
                <label for="address_type_name" class="control-label">Address Type:</label>
                <div class="controls">
                    <select name="address_type_name" class="span12 live_search" >
                        <option value="">--Choose Address type--</option>
                        @if(count($addr_types))
                            @foreach($addr_types as $addr_type)
                                <option value="{{ $addr_type->address_type_code }}" {{ (old('address_type') == $addr_type->address_type_code) ? 'selected': '' }}>{{ $addr_type->address_type_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label for="postal_address" class="control-label">Postal Address:</label>
                <div class="controls">
                    <input type="text" name="postal_address" value="{{ old('postal_address') }}" class="span12" >
                </div>
            </div>

            <div class="control-group">
                <label for="postal_code" class="control-label">Postal Code:</label>
                <div class="controls">
                    <input type="number" name="postal_code" value="{{ old('postal_code') }}" class="span12" >
                </div>
            </div>

            <div class="control-group">
                <label for="ward" class="control-label">Ward:</label>
                <div class="controls">
                    <input type="text" name="ward" value="{{ old('ward') }}" class="span12">
                </div>
            </div>

            <div class="control-group">
                <label for="street" class="control-label">Street:</label>
                <div class="controls">
                    <input type="text" name="street" value="{{ old('street') }}" class="span12">
                </div>
            </div>

            <div class="control-group">
                <label for="building" class="control-label">Building:</label>
                <div class="controls">
                    <input type="text" name="building" value="{{ old('building') }}" class="span12">
                </div>
            </div>

            <div class="control-group">
                <label for="house_no" class="control-label">House No:</label>
                <div class="controls">
                    <input type="text" name="house_no" value="{{ old('house_no') }}" class="span12">
                </div>
            </div>

            <div class="control-group">
                <label for="phone" class="control-label">Phone No:</label>
                <div class="controls">
                    <input type="integer" name="phone" value="{{ old('phone') }}" class="span12" >
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <input type="button" class="btn btn-default" value="Close" data-dismiss="modal">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
    </div>
</form>
<!-- end add address modal -->
