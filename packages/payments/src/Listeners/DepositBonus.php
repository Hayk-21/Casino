<?php

namespace Packages\Payments\Listeners;

use Packages\Payments\Events\DepositCompleted;
use App\Models\Bonus;
use App\Services\BonusService;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DepositBonus
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
     * @param  DepositCompleted  $event
     * @return void
     */
    public function handle(DepositCompleted $event)
    {
        $user = $event->user;
        $deposit = $event->deposit;

        $minDeposit = config('settings.bonuses.deposit.amount_min');
        $bonusPct = config('settings.bonuses.deposit.amount_pct');

        if ($minDeposit > 0 && $deposit->amount >= $minDeposit && $bonusPct > 0) {
            BonusService::create($user->account, Bonus::TYPE_DEPOSIT, $deposit->amount * $bonusPct / 100);
        }

        // check if user has referrer
        if ($user->referrer) {
            $bonusPct = $user->referrer->referrer_deposit_pct ?: config('settings.bonuses.referral.referrer_deposit_pct');
            BonusService::create($user->referrer->account, Bonus::TYPE_REFERRER_DEPOSIT, $deposit->amount * $bonusPct / 100);
        }
    }
}
