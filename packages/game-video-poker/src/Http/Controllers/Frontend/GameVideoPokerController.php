<?php

namespace Packages\GameVideoPoker\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Packages\GameVideoPoker\Http\Requests\Frontend\DrawCards;
use Packages\GameVideoPoker\Http\Requests\Frontend\PlayGame;
use Packages\GameVideoPoker\Models\GameVideoPoker;
use Packages\GameVideoPoker\Services\GameVideoPokerService;

class GameVideoPokerController extends Controller
{
    public function show(GameVideoPokerService $gameVideoPokerService)
    {
        $game = $gameVideoPokerService->init()->get();
        $game->loadMissing('account');

        return view('game-video-poker::frontend.pages.game', [
            'options'=>[
                'game'          => $game,
                'preloaderImgUrl' => asset('images/preloader/' . config('settings.theme') . '/preloader.svg'),

                'config' => [
                    'combinations'      => GameVideoPoker::combinations(),
                    'paytable'          => json_decode(config('game-video-poker.paytable'),true),
                    'minBet'            => config('game-video-poker.min_bet'),
                    'maxBet'            => config('game-video-poker.max_bet'),
                    'betChangeAmount'   => config('game-video-poker.bet_change_amount'),
                    'defaultBetAmount'  => config('game-video-poker.default_bet_amount'),
                    'defaultBetCoins'   => config('game-video-poker.default_bet_coins'),
                    'images_path'       => asset('images/games/video-poker/cards'),
                    'card_back'         => asset('images/games/video-poker/' . config('settings.theme') . '/back.png')
                ],
                'routes' => [
                    'play' => route('games.video-poker.play'),
                    'draw' => route('games.video-poker.draw'),
                ],
                'sounds' => [
                    'click'         => asset('audio/games/video-poker/click.wav'),
                    'none'          => asset('audio/games/video-poker/none.wav'),
                    'deal'          => asset('audio/games/video-poker/deal.wav'),
                    'flip'          => asset('audio/games/video-poker/flip.wav'),
                    'hold'          => asset('audio/games/video-poker/hold.wav'),
                    'line_select'   => asset('audio/games/video-poker/line_select.wav'),
                    'lose'          => asset('audio/games/video-poker/lose.wav'),
                    'unhold'        => asset('audio/games/video-poker/unhold.wav'),
                    'win'           => asset('audio/games/video-poker/win.wav')
                ]
            ]
        ]);
    }

    /**
     * Draw cards
     *
     * @param DrawCards $request
     * @param GameVideoPokerService $gameVideoPokerService
     * @return mixed
     */
    public function draw(DrawCards $request, GameVideoPokerService $gameVideoPokerService)
    {
        return $gameVideoPokerService
            ->load($request->game_id)
            ->setGameProperty('client_seed', $request->seed)
            ->draw($request->only(['bet_coins', 'bet_amount']))
            ->get();
    }

    /**
     * Second round
     *
     * @param PlayGame $request
     * @param GameVideoPokerService $gameVideoPokerService
     * @return \App\Services\GameService|array|mixed
     * @throws \Exception
     */
    public function play(PlayGame $request, GameVideoPokerService $gameVideoPokerService)
    {
        // complete the game
        return $gameVideoPokerService
            ->load($request->game_id)
            ->play($request->only(['hold']))
            ->get();
    }
}
