<?php

namespace App\Services;

use App\Models\Account;
use App\Models\Bonus;

/**
 * Description of BonusServiceExtend
 *
 * @author root87x
 */
class BonusServiceExtend
{
    /**
     * Create a new bonus and associated transaction
     * Расширение для Вебмастеров
     * @param Account $account
     * @param int $type
     * @param float $amount
     * @return Bonus|null
     */
    public static function create(Account $account, int $referree_id, int $type, float $amount)
    {
        if ($amount < 0.01) return NULL;

        // create bonus
        $bonus = new Bonus();
        $bonus->account()->associate($account);
        $bonus->type = $type;
        $bonus->amount = $amount;
        $bonus->save();

        // create account transaction
        $accountService = new AccountServiceExtend($account, $referree_id);
        $accountService->transaction($bonus, $amount);

        return $bonus;
    }
}
