@if(!$games->isEmpty())
<div class="biggestwins">
  <div class="biggestwins__upper">
    <span>Biggest win</span>
    <div class="clippath">8 BTC</div>
  </div>
  <div class="biggestwins__content">
    <span class="win">Win now</span>

    <div class="winn">
      @foreach ($games as $game)

      <div class="wins">
        <img src="assets/img/slot.png" alt="">
        <img class="winner" loading="lazy" src="assets/img/winner.png" alt="">
        <div>
          <span class="gamename">{{$game->title}}</span>
          <span class="username">{{$game->account->user->name}}</span>
          <span class="win">Win {{ $game->gameable->result }}</span>
        </div>
      </div>

      @endforeach
    </div>

  </div>
</div>
@endif