<?php

namespace Packages\GameBlackjack\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Packages\GameBlackjack\Http\Requests\Frontend\Deal;
use Packages\GameBlackjack\Http\Requests\Frontend\HitStand;
use Packages\GameBlackjack\Http\Requests\Frontend\Double;
use Packages\GameBlackjack\Http\Requests\Frontend\Insurance;
use Packages\GameBlackjack\Http\Requests\Frontend\Split;
use Packages\GameBlackjack\Http\Requests\Frontend\SplitHitStand;
use Packages\GameBlackjack\Services\GameBlackjackService;

class GameBlackjackController extends Controller
{
	public function show(GameBlackjackService $gameBlackjackService)
	{
		$game = $gameBlackjackService->init()->get();
		$game->loadMissing(['account']);

		return view('game-blackjack::frontend.pages.game', [
			'options'=>[
				'game'          => $game,
				'preloaderImgUrl' => asset('images/preloader/' . config('settings.theme') . '/preloader.svg'),
				'config' => [
					'minBet'            => config('game-blackjack.min_bet'),
					'maxBet'            => config('game-blackjack.max_bet'),
					'betChangeAmount'   => config('game-blackjack.bet_change_amount'),
					'defaultBetAmount'  => config('game-blackjack.default_bet_amount'),
					'statuses'			=> [
						'completed'		=> \App\Models\Game::STATUS_COMPLETED
					],
					'images_path'       => asset('images/games/blackjack/cards'),
					'card_back'         => asset('images/games/blackjack/' . config('settings.theme') . '/back.png')
				],
				'routes' => [
					'deal'       		=> route('games.blackjack.deal'),
					'insurance'  		=> route('games.blackjack.insurance'),
					'hit'        		=> route('games.blackjack.hit'),
					'double'     		=> route('games.blackjack.double'),
					'stand'      		=> route('games.blackjack.stand'),
					'split'      		=> route('games.blackjack.split'),
					'splitHit'   		=> route('games.blackjack.split-hit'),
					'splitStand' 		=> route('games.blackjack.split-stand'),
				],
				'sounds' => [
					'click'         => asset('audio/games/blackjack/click.wav'),
					'deal'          => asset('audio/games/blackjack/deal.wav'),
					'card'          => asset('audio/games/blackjack/card.wav'),
					'flip'         	=> asset('audio/games/blackjack/flip.wav'),
					'hand'          => asset('audio/games/blackjack/hand.wav'),
					'insurance'   	=> asset('audio/games/blackjack/insurance.wav'),
					'lose'          => asset('audio/games/blackjack/lose.wav'),
					'none'       	=> asset('audio/games/blackjack/none.wav'),
					'shuffle'       => asset('audio/games/blackjack/shuffle.wav'),
					'win'           => asset('audio/games/blackjack/win.wav')
				]
			]
		]);
	}

    /**
     * Draw cards
     *
     * @param Deal $request
     * @param GameBlackjackService $gameBlackjackService
     * @return mixed
     */
    public function deal(Deal $request, GameBlackjackService $gameBlackjackService)
    {
        return $gameBlackjackService
            ->load($request->game_id)
            ->setGameProperty('client_seed', $request->seed)
            ->deal($request->only(['bet']))
            ->get();
    }

    public function insurance(Insurance $request, GameBlackjackService $gameBlackjackService)
    {
        return $gameBlackjackService
            ->load($request->game_id)
            ->insurance()
            ->get();
    }

    public function hit(HitStand $request, GameBlackjackService $gameBlackjackService)
    {
        return $gameBlackjackService
            ->load($request->game_id)
            ->hit()
            ->get();
    }

    public function splitHit(SplitHitStand $request, GameBlackjackService $gameBlackjackService)
    {
        return $gameBlackjackService
            ->load($request->game_id)
            ->splitHit($request->hand)
            ->get();
    }

    public function double(Double $request, GameBlackjackService $gameBlackjackService)
    {
        return $gameBlackjackService
            ->load($request->game_id)
            ->double()
            ->get();
    }

    public function stand(HitStand $request, GameBlackjackService $gameBlackjackService)
    {
        return $gameBlackjackService
            ->load($request->game_id)
            ->stand()
            ->get();
    }

    public function splitStand(SplitHitStand $request, GameBlackjackService $gameBlackjackService)
    {
        return $gameBlackjackService
            ->load($request->game_id)
            ->splitStand($request->hand)
            ->get();
    }

    public function split(Split $request, GameBlackjackService $gameBlackjackService)
    {
        return $gameBlackjackService
            ->load($request->game_id)
            ->split()
            ->get();
    }
}
