<?php

return [
    'version'           => '1.4.0',
    'min_bet'           => env('GAME_SLOTS_MIN_BET', 1),
    'max_bet'           => env('GAME_SLOTS_MAX_BET', 500),
    'bet_change_amount' => env('GAME_SLOTS_BET_CHANGE_AMOUNT', 1),
    'default_bet'       => env('GAME_SLOTS_DEFAULT_BET', 1),
    'default_lines'     => env('GAME_SLOTS_DEFAULT_LINES', 10),
    'symbols'           => json_decode(env('GAME_SLOTS_SYMBOLS','[{"filename":"apple.png","scatter":false,"wild":false,"w1":"0","w1t":"x","w2":"0","w2t":"x","w3":"2","w3t":"x","w4":"5","w4t":"x","w5":"20","w5t":"x","idx":0,"el":{}},{"filename":"bar.png","scatter":false,"wild":true,"w1":0,"w1t":"x","w2":"0","w2t":"x","w3":"0","w3t":"x","w4":"10","w4t":"x","w5":"15","w5t":"x","idx":1,"el":{}},{"filename":"bell.png","scatter":false,"wild":false,"w1":0,"w1t":"x","w2":"0","w2t":"x","w3":"2","w3t":"x","w4":"10","w4t":"x","w5":"10","w5t":"x","idx":2,"el":{}},{"filename":"cherry.png","scatter":false,"wild":false,"w1":0,"w1t":"x","w2":0,"w2t":"x","w3":"3","w3t":"x","w4":"5","w4t":"x","w5":"10","w5t":"x","idx":3,"el":{}},{"filename":"lemon.png","scatter":false,"wild":false,"w1":0,"w1t":"x","w2":0,"w2t":"x","w3":"2","w3t":"x","w4":"7","w4t":"x","w5":"20","w5t":"x","idx":4,"el":{}},{"filename":"orange.png","scatter":false,"wild":false,"w1":0,"w1t":"x","w2":0,"w2t":"x","w3":"3","w3t":"x","w4":"5","w4t":"x","w5":"10","w5t":"x","idx":5,"el":{}},{"filename":"plum.png","scatter":false,"wild":false,"w1":0,"w1t":"x","w2":0,"w2t":"x","w3":"2","w3t":"x","w4":"10","w4t":"x","w5":"20","w5t":"x","idx":6,"el":{}},{"filename":"seven.png","scatter":true,"wild":false,"w1":0,"w1t":"x","w2":"0","w2t":"x","w3":"0","w3t":"x","w4":"5","w4t":"x","w5":"10","w5t":"x","idx":7,"el":{}},{"filename":"water-melon.png","scatter":false,"wild":false,"w1":"0","w1t":"x","w2":"0","w2t":"x","w3":"2","w3t":"x","w4":"5","w4t":"x","w5":"15","w5t":"x","idx":8,"el":{}}]'),true),
    'reels'             => json_decode(env('GAME_SLOTS_REELS','{"0":{"0":0,"1":1,"2":2,"3":3,"4":4,"5":5,"6":6,"7":7,"8":8},"1":{"0":1,"1":2,"2":3,"3":4,"4":5,"5":6,"6":7,"7":8,"8":0},"2":{"0":2,"1":3,"2":4,"3":5,"4":6,"5":7,"6":8,"7":0,"8":1},"3":{"0":3,"1":4,"2":5,"3":6,"4":7,"5":8,"6":0,"7":1,"8":2},"4":{"0":4,"1":5,"2":6,"3":7,"4":8,"5":0,"6":1,"7":2,"8":3}}'),true),
];
