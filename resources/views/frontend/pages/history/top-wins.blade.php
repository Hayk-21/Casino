@extends('frontend.layouts.home')

@push("styles")
<link rel="stylesheet" href="{{asset('css/topwins.css')}}">
@endpush
@section('content')

<div class="content" style="align-items: unset;" id="desktop_table">
	<h1 class="account_heading">Top Wins</h1>
	@if(!$games)
	<h1 class="account_heading">No wins</h1>

	@elseif ($games)
	<table class="top_wins_table_data">
		<thead>
			<tr>
				<th colspan="6">
					<div style="display: flex; justify-content: space-around; align-items: center;">
						<span style="width: 10%;">Name</span>
						<span style="width: 22%;">Game</span>
						<span style="width: 12%;">Bet</span>
						<span style="width: 12%;">
							Win
							<img src="assets/img/topwins/Sort_arrow.png" alt="" style="margin: 0 12px ">
						</span>
						<span style="width: 14%;">Result</span>
						<span style="width: 27%;">Played</span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($games as $game)
			<tr>
				<td>{{ $game->account->user->name }}</td>
				<td>{{ $game->title }}</td>
				<td>{{ $game->_bet }}</td>
				<td>{{ $game->_win }}</td>
				<td>{{ $game->gameable->result }}</td>
				<td>
					<span style="margin: 0 0 0 14px">{{ $game->updated_at->diffForHumans() }}</span>
					<img src="assets/img/topwins/green_oval (2).png" alt="" style="margin: 0 0 0 5vw">
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@endif
</div>


<!-- table for mobile  -->
<!-- table mobile -->
<div class="content" style="align-items: unset;" id="mobile_table">
	<h1 class="account_heading">Top wins</h1>

	<!-- table mobile -->
	<div class="cube_for_mobile" id="main_table_mobile">
		<div class="cube_first_side" style="display: flex; justify-content: space-between; flex-direction: row;">
			<div style="display: flex; justify-content: start; flex-direction: column;" class="headings">
				<div>Name</div>
				<div>Game</div>
				<div>Bet</div>
				<div>Win</div>
				<div>Result</div>
				<div>Played</div>
			</div>
			@foreach ($games as $game)
			<div style="display: flex; justify-content: end; flex-direction: column; text-align: right;" id="info_right">
				<div style="color: #FFD400;">{{ $game->account->user->name }}</div>
				<div>{{ $game->title }}</div>
				<div>{{ $game->_bet }}</div>
				<div>{{ $game->_win }}</div>
				<div>{{ $game->gameable->result }}</div>
				<div style="display: flex; justify-content: right;"><span>{{ $game->updated_at->diffForHumans() }}</span>
					<img src="assets/img/account/green_oval (2).png" alt="" style="margin: 0 0 0 2vw">
				</div>
			</div>
			@endforeach

		</div>
	</div>
</div>
@endsection