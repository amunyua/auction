<table id="my-bids" class="live_table table table-bordered">
    <thead>
    <tr>
        <th>Date</th>
        <th>Service Account</th>
        <th>Journal Type</th>
        <th>Particular</th>
        <th>Debit</th>
        <th>Credit</th>
    </tr>
    </thead>
</table>
<input type="hidden" id="mf_id" value="{{ $mf->id }}"/>
@push('js')
<script>
    var MyWallet = $('#my-wallet').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'my-wallet/' + $('input#mf_id').val(),
        order: [[0, 'desc']],
        columns: [
            { data: 'bid_id', 'name': 'bid_id' },
            { data: 'item_name', 'name': 'item_name' },
            { data: 'bid_price', 'name': 'bid_price' },
            { data: 'bid_date', 'name': 'bid_date' },
            { data: 'new_endtime', 'name': 'new_endtime' }
        ]
    });
</script>
@endpush