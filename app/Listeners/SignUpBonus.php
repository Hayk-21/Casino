<?php

namespace App\Listeners;

use App\Models\User;
use App\Models\Bonus;
use App\Services\BonusService;
use App\Services\BonusServiceExtend;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SignUpBonus
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        $user = $event->user;

        /**
         * Добавить бонус за регистрация
         * Обновлено: Кроме вебмастеров
        */
        if ($user->role !== User::ROLE_WEBMASTER) {
            BonusService::create($user->account, Bonus::TYPE_SIGN_UP, config('settings.bonuses.sign_up_credits'));
        }

        // check if user has referrer
        if ($user->referrer) {
            // referee bonus
            BonusService::create(
                $user->account,
                Bonus::TYPE_REFEREE_SIGN_UP,
                $user->referrer->referee_sign_up_credits ?: config('settings.bonuses.referral.referee_sign_up_credits')
            );

            // referrer bonus
            BonusServiceExtend::create(
                $user->referrer->account,
                $user->account->id,
                Bonus::TYPE_REFERRER_SIGN_UP,
                $user->referrer->referrer_sign_up_credits ?: config('settings.bonuses.referral.referrer_sign_up_credits')
            );
        }
    }
}
