
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
