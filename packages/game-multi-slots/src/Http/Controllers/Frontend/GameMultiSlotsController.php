<?php

namespace Packages\GameMultiSlots\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Packages\GameMultiSlots\Http\Requests\Frontend\PlayGame;
use Packages\GameMultiSlots\Services\GameMultiSlotsService;
use Packages\GameSlots\Services\GameSlotsService;

class GameMultiSlotsController extends Controller
{
    public function __construct(Request $request, GameMultiSlotsService $gameMultiSlotsService)
    {
        if (is_null($gameMultiSlotsService->getIndex()))
            abort(404);
    }

    public function show(GameMultiSlotsService $gameMultiSlotsService)
    {
        $index = $gameMultiSlotsService->getIndex();
        $syms = [];
        $paytable = [];
        $symbols = config('game-multi-slots.symbols')[$index];
        $reels = config('game-multi-slots.reels')[$index];

        foreach($symbols as &$sym){
            $syms[] = asset('storage/games/multi-slots/' . $index . '/' . $sym['filename']);
            $sym['filename'] = asset('storage/games/multi-slots/' . $index . '/' . $sym['filename']);
            $paytable[] = [
                'scatter'       => $sym['scatter'],
                'wild'          => $sym['wild'],
                'w1'            => $sym['w1']?( ($sym['w1t']=='x'?'x':'').$sym['w1'] ):'',
                'w2'            => $sym['w2']?( ($sym['w2t']=='x'?'x':'').$sym['w2'] ):'',
                'w3'            => $sym['w3']?( ($sym['w3t']=='x'?'x':'').$sym['w3'] ):'',
                'w4'            => $sym['w4']?( ($sym['w4t']=='x'?'x':'').$sym['w4'] ):'',
                'w5'            => $sym['w5']?( ($sym['w5t']=='x'?'x':'').$sym['w5'] ):'',
            ];
        }

        $game = $gameMultiSlotsService->init()->get();
        $game->loadMissing(['account']);

        return view('game-multi-slots::frontend.pages.game', [
            'index'  => $index,
            'options'=>[
                'game'                  => $game,
                'preloaderImgUrl'       => asset('images/preloader/' . config('settings.theme') . '/preloader.svg'),
                'config' => [
                    'minBet'            => config('game-multi-slots.min_bet')[$index],
                    'maxBet'            => config('game-multi-slots.max_bet')[$index],
                    'betChangeAmount'   => config('game-multi-slots.bet_change_amount')[$index],
                    'defaultBetAmount'  => config('game-multi-slots.default_bet')[$index],
                    'defaultLines'      => config('game-multi-slots.default_lines')[$index],
                    'images_path'       => asset('storage/games/multi-slots/' . $index),
                    'lines'             => GameSlotsService::lines,
                    'symbols'           => $symbols,
                    'reels'             => $reels,
                    'syms'              => $syms,
                    'paytable'          => $paytable,

                    'animation'         => asset('images/games/slots/animation.svg'),

                    'animation_color_border' => 'red',
                    'animation_color_fill' => 'yellow',

                    'animation_frames'  => 14,
                    'animation_time'    => 28,
                    'animation_size'    => 28.6,
                    'sym_size'          => 200,
                    'speed_max'         => 5000
                ],
                'routes' => [
                    'play'       		=> route('games.multi-slots.play', ['index' => $index]),
                ],
                'sounds' => [
                    'click'             => asset('audio/games/slots/click.wav'),
                    'lose'              => asset('audio/games/slots/lose.wav'),
                    'spin'              => asset('audio/games/slots/spin.wav'),
                    'start'             => asset('audio/games/slots/start.wav'),
                    'stop'              => asset('audio/games/slots/stop.wav'),
                    'win'   	        => asset('audio/games/slots/win.wav'),
                ]
            ]
        ]);
    }

    public function play(PlayGame $request, GameMultiSlotsService $gameMultiSlotsService)
    {
        return $gameMultiSlotsService
            ->load($request->game_id)
            ->setGameProperty('client_seed', $request->seed)
            ->play($request->only(['lines_count', 'bet']))
            ->get();
    }
}
