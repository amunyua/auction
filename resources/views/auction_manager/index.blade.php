@extends('layouts.dt')
@section('title', 'Manage Auctions')
@section('page-title', 'Manage Auctions')
@section('widget-title', 'Auctions')

@push('js')
<script src="{{ URL::asset('src_js/users/index.js') }}"></script>
@endpush

@section('breadcrumbs')
    <li>
        <i class="icon-home"></i>
        <a href="{{ url('/home') }}">Home</a>
        <span class="icon-angle-right"></span>
    </li>
    <li>
        <a href="#">Auction Manager</a>
        <span class="icon-angle-right"></span>
    </li>
    <li><a href="#">Manage Auctions</a></li>
@endsection

@section('actions')
    <a href="#add_auction_item" class="btn btn-small btn-primary" data-toggle="modal" title="Add Auction Item">
        <i class="icon-plus"></i> Add</a>
    <a href="#edit_auction_item" class="btn btn-small btn-warning" title="Update Auction Item">
        <i class="icon-edit"></i> Update</a>
    <a href="#delete_auction_item" class="btn btn-small btn-danger" title="Delete Auction Item">
        <i class="icon-trash"></i> Delete</a>
@endsection

@section('content')
    @include('common.success')
    @include('common.warnings')
    <table id="table1" class="table table-bordered">
        <thead>
        <tr>
            <th>Auction#</th>
            <th>Item</th>
            <th>Autorollover</th>
            <th>Reserve Price</th>
            <th>Bid Cost</th>
            <th>Refresh Rate</th>
            <th>Buy Now Option</th>
            <th>Buy Now Price</th>
            <th>Start Date</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @if(count($auctions))
            @foreach($auctions as $auction)
                <tr>
                    <td>{{ $auction->id }}</td>
                    <td>{{ $auction->item_id }}</td>
                    <td>{{ $auction->auto_rollover }}</td>
                    <td>{{ $auction->reserve_price }}</td>
                    <td>{{ $auction->bid_cost }}</td>
                    <td>{{ $auction->refresh_rate }}</td>
                    <td>{{ $auction->buy_now_option }}</td>
                    <td>{{ $auction->buy_now_price }}</td>
                    <td>{{ $auction->start_date }}</td>
                    <td>{{ $auction->status }}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class="clearfix"></div>
@endsection

@section('modals')
    {{--Add Modal--}}
    <form action="{{ url('/add-auction-item') }}" method="post">
        {{ csrf_field() }}
        <div id="add_auction_item" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Add Auction Manager</h3>
            </div>
            <div class="modal-body">
                <label for="item">Auction Item:</label>
                <div class="row-fluid" style="margin-bottom: 10px;">
                    <select name="item" class="span12 live_search">
                        <option value="">--Choose Auction Item--</option>
                        @if(count($items))
                            @foreach($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="row-fluid">
                    <label for="auto_rollover">Auto-Rollover:</label>
                    <select name="auto_rollover" class="span12" required>
                        <option value="">--Choose--</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>

                <div class="row-fluid">
                    <label for="reserve_price">Reserve Price:</label>
                    <input type="number" step="any" min="0" name="reserve_price" class="span12"/>
                </div>

                <div class="row-fluid">
                    <label for="bid_cost">Bid Cost:</label>
                    <input type="number" step="any" min="0" name="bid_cost" class="span12"/>
                </div>

                <div class="row-fluid">
                    <label for="refresh_rate">Refresh Rate:</label>
                    <input type="number" min="0" name="refresh_rate" class="span12"/>
                </div>

                <div class="row-fluid">
                    <label for="buy_now_option">Buy Now Option:</label>
                    <input type="number" min="0" name="buy_now_option" class="span12"/>
                </div>

                <div class="row-fluid">
                    <label for="buy_now_price">Buy Now Price:</label>
                    <input type="number" step="any" min="0" name="buy_now_price" class="span12"/>
                </div>

                <div class="row-fluid">
                    <label for="start_date">Start Date:</label>
                    <input type="date" name="start_date" class="span12"/>
                </div>
            </div>

            <div class="modal-footer">
                <button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> Close</button>
                <button class="btn btn-primary"><i class="icon-save"></i> Save</button>
            </div>
        </div>
    </form>

    {{--Delete Modal--}}
@endsection