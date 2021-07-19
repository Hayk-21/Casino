@extends('frontend.layouts.home')

{{-- @section('content')
    @if(!$raffle)
        <div class="alert alert-info" role="alert">
            {{ __('There are no raffles yet.') }}
</div>
@else
@if($raffle->is_completed)
<div class="card text-center border-primary">
	<div class="card-header bg-primary">
		{{ __('Raffle is completed') }}
	</div>
	<div class="card-body">
		@if($raffle->win_amount > 0)
		<h4 class="card-title pt-3">
			<a href="{{ route('frontend.users.show', $raffle->winner) }}">{{ $raffle->winner->name }}</a>
			{{ __('won :x credits', ['x' => $raffle->_win_amount]) }}
		</h4>
		@else
		<p class="card-text py-3">
			{{ __('This raffle has no winner.') }}
		</p>
		@endif
	</div>
	<div class="card-footer border-primary text-muted">
		@if($raffle->next_start_date->gt(\Illuminate\Support\Carbon::now()))
		{{ __('Next raffle will start in :time', ['time' => $raffle->next_start_date->diffForHumans()]) }}
		@else
		{{ __('Next raffle should start soon') }}
		@endif
	</div>
</div>
@else
<div class="card text-center border-primary">
	<div class="card-header bg-primary">
		{{ __('Raffle is in progress') }}
	</div>
	<div class="card-body">
		<h4 class="card-title">{{ __('Win up to :n credits', ['n' => $raffle->_max_win_amount]) }}</h4>
		<ul class="list-group list-group-horizontal-lg justify-content-center py-3">
			<li class="list-group-item border-light">
				{{ __('Tickets left') }}
				<span class="badge badge-primary ml-1 p-2">{{ $raffle->total_tickets - $raffle->tickets->count() }}</span>
			</li>
			<li class="list-group-item border-light">
				{{ __('Ticket price') }}
				<span class="badge badge-primary ml-1 p-2">{{ $raffle->ticket_price }}</span>
			</li>
			<li class="list-group-item border-light">
				{{ __('You purchased') }}
				<span class="badge badge-primary ml-1 p-2">
					{{ $tickets->where('account_id', auth()->user()->account->id)->count() }}
					@if($raffle->max_tickets_per_user)
					/ {{ $raffle->max_tickets_per_user }}
					@endif
				</span>
			</li>
			<li class="list-group-item border-light">
				{{ __('Pot size') }}
				<span class="badge badge-primary ml-1 p-2">{{ $raffle->_pot_size }}</span>
			</li>
		</ul>
		@if($raffle->is_end_date_passed || $raffle->getMaxTicketsUserCanPurchase(auth()->user()) == 0)
		<p class="card-text py-3">
			{{ __('You can not purchase tickets at this time.') }}
		</p>
		@else
		<p class="card-text py-3">
			{{ __('Purchase raffle tickets.') }}
			{{ __('A random ticket will be drawn at the end of the raffle.') }}
			{{ __('The ticket owner will win the pot, which equals :pct% of all purchased tickets value.', ['pct' => $raffle->pot_size_pct]) }}
			{{ __('The more tickets you purchase, the more chances you have to win.') }}
		</p>
		<form method="POST" action="{{ route('frontend.raffle.ticket', $raffle) }}">
			@csrf
			<div class="form-row mb-3">
				<div class="col-lg-4 offset-lg-4">
					<div class="input-group input-group">
						<input type="text" name="quantity" class="form-control text-center" placeholder="{{ __('Quantity') }}"
							value="{{ old('quantity') }}">
						<div class="input-group-append">
							<button type="submit" class="btn btn-primary">{{ __('Buy tickets') }}</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		@endif
	</div>
	<div class="card-footer border-primary text-muted">
		@if($raffle->is_end_date_passed)
		{{ __('Raffle should finish soon') }}
		@else
		{{ __('Time remaining') }}
		<countdown-timer end-date="{{ $raffle->end_date->timestamp }}"></countdown-timer>
		@endif
	</div>
</div>
@endif
@if($participants->count())
<h2 class="mt-4">{{ __('Participants') }}</h2>
<table class="table table-hover table-stackable">
	<thead>
		<tr>
			<th>{{ __('User') }}</th>
			<th class="text-right">{{ __('Tickets') }}</th>
			<th class="text-right">{{ __('Last purchased') }}</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($participants as $participant)
		<tr>
			<td data-title="{{ __('User') }}">
				<a href="{{ route('frontend.users.show', $participant->user) }}">{{ $participant->user->name }}</a>
				@if($raffle->is_completed && $raffle->winner->id == $participant->user->id)
				<span class="badge badge-info text-light">{{ __('winner') }}</span>
				@endif
			</td>
			<td data-title="{{ __('Tickets purchased') }}" class="text-right">{{ $participant->tickets_count }}</td>
			<td data-title="{{ __('Last purchased') }}" class="text-right">
				{{ $participant->last_purchased->diffForHumans() }}
				<span data-balloon="{{ $participant->last_purchased }}" data-balloon-pos="up">
					<i class="far fa-clock"></i>
				</span>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endif
<div class="col text-center mt-4">
	<a href="{{ route('frontend.raffle.history') }}" class="btn btn-primary">
		{{ __('View past raffles') }}
	</a>
</div>
@endif
@endsection --}}
{{-- @push("styles")
<link rel="stylesheet" href="{{asset('css/raffle.css')}}">
@endpush
@section('content')
<div class="content" style="align-items: unset;" id="desktop_table">
	<h1 class="account_heading">Raffle</h1>
	@if ($raffle->is_completed)
	<div style="display: flex; align-items: center;">
		<img src="{{asset("assets/img/raffle/trophy-3 copy.png")}}" alt="">
		<span style="color: #ffffff; margin: 0 0 0 1vw; font-size: 14px; width: 110px;">Raffle is
			completed</span>
	</div>
	<div style="display: flex; align-items: center;flex-direction: column; color: #ffffff;">
		@if($raffle->win_amount > 0)
		<p style="font-size: 24px; font-weight: 800; margin: 0 auto  !important;">{{ $raffle->winner->name }}</p>
		<p style="color: #FFD400; font-size: 30px; font-weight: 800; margin: 0 auto  !important;">won
			<span>{{$raffle->win_amount}}</span> credits</p>
		@else
		<p class="card-text py-3">
			{{ __('This raffle has no winner.') }}
		</p>
		@endif
		@if($raffle->next_start_date->gt(\Illuminate\Support\Carbon::now()))
		<p style="font-size: 10px; font-weight: 600; margin: 4px auto  !important;">The next draw will begin
			in<span>{{$raffle->next_start_date->diffForHumans()}}</span> minutes</p>
		@else
		{{ __('Next raffle should start soon') }}
		<p style="font-size: 10px; font-weight: 600; margin: 4px auto  !important;">{{__('Next raffle should start soon')}}
		</p>
		@endif
	</div>
	<div style="height: 10px; width: 200px;"></div>
</div>
@endif
<h1 class="participants">Participants</h1>
<table class="raffle_table_data">
	<thead>
		<tr>
			<th colspan="3">
				<div style="display: flex; justify-content: space-between; align-items: center;">
					<span style="width: 37%;">User</span>
					<span style="width: 30%; ">Tickets</span>
					<span style="width: 33%;">Last Purchased</span>
				</div>
			</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($participants as $participant)
		<tr>
			@if($raffle->is_completed && $raffle->winner->id == $participant->user->id)
			<td>
				<div style="display: flex; align-items: center; justify-content: space-between;">
					{{ $participant->user->name }}
					<div style="display: flex; align-items: center; align-items: center; margin: 0 4vw 0 0;">
						<img src="assets/img/raffle/trophy-3 copy.png" alt="">
						<span style="color: #ffffff; margin: 0 0 0 1vw; font-size: 17px;">Winner</span>
					</div>
				</div>
			</td>
			<td>{{ $participant->tickets_count }}</td>
			<td>
				<div style="display: flex; justify-content: space-between; align-items: cneter;">
					<span style="margin: 0 0 0 5vw ;">{{ $participant->last_purchased->diffForHumans() }}</span>
					<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
				</div>
			</td>
			@else
			<td>{{ $participant->user->name }}</td>
			<td>{{ $participant->tickets_count }}</td>
			<td>
				<div style="display: flex; justify-content: space-between; align-items: center;">
					<span style="margin: 0 0 0 5vw ;">{{ $participant->last_purchased->diffForHumans() }}</span>
					<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
				</div>
			</td>
			@endif
		</tr>
		@endforeach
	</tbody>
</table>
<div class="container_past_raffles">
	<div style="height: 10px; width: 150px;"></div>
	<div class="button_past_raf">
		<a href="{{ route('frontend.raffle.history') }}">View past raffles</a>
	</div>
</div>
</div>
</div>

<!-- table for mobile  -->
<div class="content" style="align-items: unset;" id="mobile_table">
	<h1 class="account_heading">Raffle</h1>

	<!-- table mobile -->
	<div class="cube_for_mobile" id="main_table_mobile">
		<div class="raffle_complited_div"
		 style="background-image: url(assets/img/raffle/Raffle_complited.png); background-size: cover; 
        display: flex; align-items: center; justify-content: center; flex-direction: column;">
			<div style="display: flex; align-items: center; margin-bottom: 20px;">
				<img src="assets/img/raffle/trophy-3 copy.png" alt="">
				<span class="raffle_completed">Raffle is
					completed</span>
			</div>
			<div style="display: flex; align-items: center; flex-direction: column; color: #ffffff;">
				<p class="user_info">Prof. Cary Corkery</p>
				<p class="info_about_game_end">won
					<span>66.50</span> credits</p>
				<p class="next_draw">The next draw will begin
					in <span>28</span> minutes</p>
			</div>
			<!-- <div style="height: 10px; width: 200px;"></div> -->
		</div>

		<!-- main table for mobile apps -->
		<div class="cube_first_side"
			style="display: flex; justify-content: space-between; flex-direction: row; margin-top: 20px;">
			<div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
				<div>User</div>
				<div>Tichets</div>
				<div>Last Purchased</div>
			</div>
			<div style="display: flex; justify-content: end; flex-direction: column; text-align: right;" id="info_right">
				<div>Bryan Riley</div>
				<div>1</div>
				<div style="display: flex; justify-content: end;  text-align: right;"><span>2 days ago</span><img
						src="assets/img/raffle/green_oval (2).png" alt="" style="margin: 0 0 0 2vw">

				</div>
			</div>
		</div>
	</div>
</div>
@endsection --}}

@push("styles")
<link rel="stylesheet" href="{{asset('css/raffle.css')}}">
@endpush
@section('content')

<div class="content" style="align-items: unset;" id="desktop_table">
	<h1 class="account_heading">Raffle</h1>
	<div class="raffle_complited_div" style="background-image: url(assets/img/raffle/Raffle_complited.png); 
        display: flex; align-items: center; justify-content: space-around;">
		<div style="display: flex; align-items: center;">
			<img src="assets/img/raffle/trophy-3 copy.png" alt="">
			<span style="color: #ffffff; margin: 0 0 0 1vw; font-size: 14px; width: 110px;">Raffle is
				completed</span>
		</div>
		<div style="display: flex; align-items: center;flex-direction: column; color: #ffffff;">
			<p style="font-size: 24px; font-weight: 800; margin: 0 auto  !important;">Prof. Cary Corkery</p>
			<p style="color: #FFD400; font-size: 30px; font-weight: 800; margin: 0 auto  !important;">won
				<span>66.50</span> credits</p>
			<p style="font-size: 10px; font-weight: 600; margin: 4px auto  !important;">The next draw will begin
				in<span>38</span> minutes</p>
		</div>
		<div style="height: 10px; width: 200px;"></div>
	</div>

	<!-- <div class="content">
        <div class="table_head">
            <span>Balance</span>
            <span>Created</span>
            <span>Updated</span>
            <span>Actions</span>
        </div>
        <div class="table_content">
            <span>
                <p style="color: #6BA939;">958,1255.76</p><img src="images/green_oval (1).png" alt="" style="margin: 0 16px 0 52px">
            </span>
            <span>
                <p>3 weeks ago</p><img src="images/green_oval (2).png" alt="" style="margin: 0 22px 0 7px">
            </span>
            <span>
                <p>2 days ago</p><img src="images/green_oval (2).png" alt="" style="margin: 0 22px 0 7px">
            </span>
            <span>
                <a href=""><button type="button" class="depostit_button">Deposit</button></a>
                <a href=""><button type="button" class="withdraw_button">Withdraw</button></a>
            </span>
        </div> -->
	<h1 class="participants">Participants</h1>
	<table class="raffle_table_data">
		<thead>
			<tr>
				<th colspan="3">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<span style="width: 37%;">User</span>
						<span style="width: 30%; ">Tickets</span>
						<span style="width: 33%;">Last Purchased</span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Bryan Riley</td>
				<td>1786</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">2 days ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>

			</tr>
			<tr>
				<td>Bryan Riley</td>
				<td>
					1786
				</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">2 days ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>
			</tr>
			<tr>
				<td>Bryan Riley</td>
				<td>1786</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">2 days ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>
			</tr>
			<tr>
				<td>
					<div style="display: flex; align-items: center; justify-content: space-between;">Bryan Riley
						<div style="display: flex; align-items: center; align-items: center; margin: 0 4vw 0 0;">
							<img src="{{asset("assets/img/raffle/trophy-3 copy.png")}}" alt="">
							<span style="color: #ffffff; margin: 0 0 0 1vw; font-size: 17px;">Winner</span>
						</div>
					</div>
				</td>
				<td>1786</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">2 days ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>
			</tr>
			<tr>
				<td>Bryan Riley</td>
				<td>1786</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">2 days ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>
			</tr>
			<tr>
				<td>Bryan Riley</td>
				<td>1786</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">2 days ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>
			</tr>
			<tr>
				<td>Bryan Riley</td>
				<td>1786</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">2 days ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>
			</tr>
			<tr>
				<td>Bryan Riley</td>
				<td>1786</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">2 days ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>
			</tr>
			<tr>
				<td>Bryan Riley</td>
				<td>1786</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">2 days ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>
			</tr>
			<tr>
				<td>Bryan Riley</td>
				<td>1786</td>
				<td>
					<div style="display: flex; justify-content: space-between; align-items: cneter;">
						<span style="margin: 0 0 0 5vw ;">39 minutes ago</span>
						<img src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="">
					</div>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="container_past_raffles">
		<div style="height: 10px; width: 150px;"></div>
		<div class="button_past_raf">
			<a href="{{route("frontend.raffle.history")}}">View past raffles</a>
		</div>
	</div>
</div>

<!-- table for mobile  -->
<div class="content" style="align-items: unset;" id="mobile_table">
	<h1 class="account_heading">Raffle</h1>

	<!-- table mobile -->
	<div class="cube_for_mobile" id="main_table_mobile">
		<div class="raffle_complited_div" style="background-image: url({{asset("assets/img/raffle/Raffle_complited.png")}}); 
            display: flex; align-items: center; justify-content: center; flex-direction: column;">
			<div style="display: flex; align-items: center; margin-bottom: 20px;">
				<img src="{{asset("assets/img/raffle/trophy-3 copy.png")}}" alt="">
				<span class="raffle_completed">Raffle is
					completed</span>
			</div>
			<div style="display: flex; align-items: center; flex-direction: column; color: #ffffff;">
				<p class="user_info">Prof. Cary Corkery</p>
				<p class="info_about_game_end">won
					<span>66.50</span> credits</p>
				<p class="next_draw">The next draw will begin
					in<span>38</span> minutes</p>
			</div>
			<!-- <div style="height: 10px; width: 200px;"></div> -->
		</div>

		<!-- main table for mobile apps -->
		<div class="cube_first_side"
			style="display: flex; justify-content: space-between; flex-direction: row; margin-top: 20px;">
			<div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
				<div>User</div>
				<div>Tickets</div>
				<div>Last Purchased</div>
			</div>
			<div style="display: flex; justify-content: end; flex-direction: column; text-align: right;" id="info_right">
				<div>Bryan Riley</div>
				<div>1</div>
				<div style="display: flex; justify-content: end;  text-align: right;"><span>2 days ago</span><img
						src="{{asset("assets/img/raffle/green_oval (2).png")}}" alt="" style="margin: 0 0 0 2vw">

				</div>
			</div>
		</div>
	</div>
</div>
@endsection