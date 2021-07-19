@extends('frontend.layouts.home')

{{-- @section('content')
@if($raffles->isEmpty())
<div class="alert alert-info" role="alert">
	{{ __('There are no completed raffles yet.') }}
</div>
@else
<table class="table table-hover table-stackable">
	<thead>
		<tr>
			<th>{{ __('ID') }}</th>
			<th>{{ __('Winner') }}</th>
			<th class="text-right">
				{{ __('Win amount') }}
				<span data-balloon="{{ __('in credits') }}" data-balloon-pos="up">
					<i class="far fa-question-circle"></i>
				</span>
			</th>
			<th class="text-right">{{ __('Tickets purchased') }}</th>
			<th class="text-right"><i class="fas fa-arrow-down"></i> {{ __('Completed') }}</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($raffles as $raffle)
		<tr>
			<td data-title="{{ __('ID') }}">{{ $raffle->id }}</td>
			<td data-title="{{ __('Winner') }}">
				<a href="{{ route('frontend.users.show', $raffle->winner) }}">{{ $raffle->winner->name }}</a>
			</td>
			<td data-title="{{ __('Win amount') }}" class="text-right">{{ $raffle->_win_amount }}</td>
			<td data-title="{{ __('Win amount') }}" class="text-right">
				{{ $raffle->tickets->count() }} / {{ $raffle->total_tickets }}
			</td>
			<td data-title="{{ __('Created') }}" class="text-right">
				{{ $raffle->end_date->diffForHumans() }}
				<span data-balloon="{{ $raffle->end_date }}" data-balloon-pos="up">
					<i class="far fa-clock"></i>
				</span>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
<div class="d-flex justify-content-center">
	{{ $raffles->links() }}
</div>
@endif
<div class="mt-3">
	<a href="{{ route('frontend.raffle.index') }}"><i class="fas fa-long-arrow-alt-left"></i>
		{{ __('Back to current raffle') }}</a>
</div>
@endsection --}}

{{-- @push("styles")
<link rel="stylesheet" href="{{asset('css/rafflehistory.css')}}">
@endpush
@section('content')

<div class="content" style="align-items: unset;" id="desktop_table">
	<h1 class="account_heading">Raffles History</h1>
	@if ($raffles->isEmpty())
	<h1 class="account_heading">{{ __('There are no completed raffles yet.') }}</h1>
	@else
	<table class="raffles_history_table_data">
		<thead>
			<tr>
				<th colspan="5">
					<div style="display: flex; justify-content: space-around; align-items: center;">
						<span style="width: 5%;">ID</span>
						<span style="width: 25%; ">Winner</span>
						<span style="width: 26%; display: flex; justify-content: center; align-items: center;">Win
							amount <img src="assets/img/rafflehistory/green_oval (1).png" alt="" style="margin: 0 12px 0 12px"></span>
						<span style="width: 23%;">Tickets purchased</span>
						<span style="width: 21%; display: flex; justify-content: center; align-items: center;">Completed
							<img src="{{asset("assets/img/topwins/Sort_arrow.png")}}" alt="" style="margin: 0 12px "></span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($raffles as $raffle)
			<tr>
				<td>{{ $raffle->id }}</td>
				<td>{{ $raffle->winner->name }}</td>
				<td>{{ $raffle->_win_amount }}</td>
				<td>{{ $raffle->tickets->count() }} / {{ $raffle->total_tickets }}</td>
				<td>
					<span style="margin: 0 0 0 14px">{{ $raffle->end_date->diffForHumans() }}</span>
					<img src="{{asset("assets/img/topwins/green_oval (2).png")}}" alt="" style="margin: 0 0 0 5vw"></td>
			</tr>
			@endforeach

		</tbody>
	</table>

	<div class="container_pagination">
		<ul class="pagination">
			<li><a href="" style="display: inline; text-align: left;">
					<img src="{{asset("assets/img/rafflehistory/Green_arrow_left_button.png")}}" alt=""></a></li>
			<li><a href="#">
					<</li> <li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">6</a></li>
			<li><a href="#">7</a></li>
			<li><a href="#">8</a></li>
			<li><a href="#">...</a></li>
			<li><a href="#">></a></li>
		</ul>
	</div>
	@endif
</div>

<!-- table for mobile  -->
<!-- table mobile -->
<div class="content" style="align-items: unset;" id="mobile_table">
	<h1 class="account_heading">Raffle History</h1>

	<!-- table mobile -->
	<div class="cube_for_mobile" id="main_table_mobile">
		<div class="cube_first_side" style="display: flex; justify-content: space-between; flex-direction: row;">
			<div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
				<div>ID</div>
				<div>Winner</div>
				<div style="display: flex; justify-content: center; align-items: center;">Win amount<img
						src="{{asset("assets/img/rafflehistory/green_oval (1).png")}}" alt="" style="margin: 0 12px 0 12px"></div>
				<div>Tickets purchased</div>
				<div>Completed</div>
			</div>
			<div style="display: flex; justify-content: end; flex-direction: column; text-align: right;" id="info_right">
				<div style=" color: #6BA939;">1786</div>
				<div style="color: #FFD400;">Bacarat</div>
				<div>1.00</div>
				<div>1786</div>
				<div style="display: flex; justify-content: right; align-items: center;"><span>2 days ago</span>
					<img src="{{asset("assets/img/account/green_oval (2).png")}}" alt="" style="margin: 0 0 0 4vw">
				</div>
			</div>
		</div>
	</div>
	<div class="cube_for_mobile" id="main_table_mobile">
		<div class="cube_first_side" style="display: flex; justify-content: space-between; flex-direction: row;">
			<div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
				<div>ID</div>
				<div>Winner</div>
				<div style="display: flex; justify-content: center; align-items: center;">Win amount<img
						src="{{asset("assets/img/rafflehistory/green_oval (1).png")}}" alt="" style="margin: 0 12px 0 12px"></div>
				<div>Tickets purchased</div>
				<div>Completed</div>
			</div>
			<div style="display: flex; justify-content: end; flex-direction: column; text-align: right;" id="info_right">
				<div style=" color: #6BA939;">1786</div>
				<div style="color: #FFD400;">Bacarat</div>
				<div>1.00</div>
				<div>1786</div>
				<div style="display: flex; justify-content: right; align-items: center;"><span>2 days ago</span>
					<img src="{{asset("assets/img/account/green_oval (2).png")}}" alt="" style="margin: 0 0 0 4vw">
				</div>
			</div>
		</div>


	</div>

</div>
@endsection --}}
@push("styles")
<link rel="stylesheet" href="{{asset('css/rafflehistory.css')}}">
@endpush
@section('content')

<div class="content" style="align-items: unset;" id="desktop_table">
    <h1 class="account_heading">Raffles History</h1>

    <table class="raffles_history_table_data">
        <thead>
            <tr>
                <th colspan="5">
                    <div style="display: flex; justify-content: space-around; align-items: center;">
                        <span style="width: 5%;">ID</span>
                        <span style="width: 25%; ">Winner</span>
                        <span style="width: 26%; display: flex; justify-content: center; align-items: center;">Win
                            amount <img src="{{asset("assets/img/rafflehistory/green_oval (1).png")}}" alt=""
                                style="margin: 0 12px 0 12px"></span>
                        <span style="width: 23%;">Tickets purchased</span>
                        <span style="width: 21%; display: flex; justify-content: center; align-items: center;">Completed
                            <img src="{{asset("assets/img/topwins/Sort_arrow.png")}}" alt="" style="margin: 0 12px "></span>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1786</td>
                <td>Bacarat</td>
                <td>1.00</td>
                <td>1786</td>
                <td><span style="margin: 0 0 0 14px">2 days ago</span><img src="{{asset("assets/img/topwins/green_oval (2).png")}}"
                        alt="" style="margin: 0 0 0 5vw"></td>

            </tr>
        </tbody>
    </table>

    <div class="container_pagination">

        <ul class="pagination">
            <li><a href="{{route("frontend.raffle.index")}}" style="display: inline; text-align: left;">
                    <img src="{{asset("assets/img/rafflehistory/Green_arrow_left_button.png")}}" alt=""></a></li>
            <li><a href="#">
                    <</li> <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li><a href="#">8</a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">></a></li>
        </ul>
    </div>
</div>

<!-- table for mobile  -->
<!-- table mobile -->
<div class="content" style="align-items: unset;" id="mobile_table">
    <h1 class="account_heading">Raffle History</h1>

    <!-- table mobile -->
    <div class="cube_for_mobile" id="main_table_mobile">
        <div class="cube_first_side" style="display: flex; justify-content: space-between; flex-direction: row;">
            <div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
                <div>ID</div>
                <div>Winner</div>
                <div style="display: flex; justify-content: center; align-items: center;">Win amount<img
                        src="{{asset("assets/img/rafflehistory/green_oval (1).png")}}" alt="" style="margin: 0 12px 0 12px"></div>
                <div>Tickets purchased</div>
                <div>Completed</div>
            </div>
            <div style="display: flex; justify-content: end; flex-direction: column; text-align: right;"
                id="info_right">
                <div style=" color: #6BA939;">1786</div>
                <div style="color: #FFD400;">Bacarat</div>
                <div>1.00</div>
                <div>1786</div>
                <div style="display: flex; justify-content: right; align-items: center;"><span>2 days ago</span>
                    <img src="{{asset("assets/img/account/green_oval (2).png")}}" alt="" style="margin: 0 0 0 4vw">
                </div>
            </div>
        </div>

    </div>
    <div class="cube_for_mobile" id="main_table_mobile">
        <div class="cube_first_side" style="display: flex; justify-content: space-between; flex-direction: row;">
            <div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
                <div>ID</div>
                <div>Winner</div>
                <div style="display: flex; justify-content: center; align-items: center;">Win amount<img
                        src="{{asset("assets/img/rafflehistory/green_oval (1).png")}}" alt="" style="margin: 0 12px 0 12px"></div>
                <div>Tickets purchased</div>
                <div>Completed</div>
            </div>
            <div style="display: flex; justify-content: end; flex-direction: column; text-align: right;"
                id="info_right">
                <div style=" color: #6BA939;">1786</div>
                <div style="color: #FFD400;">Bacarat</div>
                <div>1.00</div>
                <div>1786</div>
                <div style="display: flex; justify-content: right; align-items: center;"><span>2 days ago</span>
                    <img src="{{asset("assets/img/account/green_oval (2).png")}}" alt="" style="margin: 0 0 0 4vw">
                </div>
            </div>
        </div>


    </div>

</div>
@endsection