<?php

namespace Packages\Payments\Services;

use App\Services\AccountService;
use Packages\Payments\Models\Withdrawal;

class WithdrawalService
{
    private $withdrawal;

    private function __construct(Withdrawal $withdrawal)
    {
        $this->withdrawal = $withdrawal;

        return $this;
    }

    public static function fromModelInstance(Withdrawal $withdrawal)
    {
        return new self($withdrawal);
    }

    public static function fromExternalId(string $externalId)
    {
        $withdrawal = Withdrawal::where('external_id', $externalId)->firstOrFail();
        return new self($withdrawal);
    }

    /**
     * Cancel withdrawal request and return funds to user account.
     */
    public function cancel()
    {
        if ($this->withdrawal->is_created || $this->withdrawal->is_in_progress) {
            // update withdrawal model
            $this->withdrawal->status = Withdrawal::STATUS_CANCELLED;
            $this->withdrawal->save();
            // create a credit transaction on user account to return funds
            $accountService = new AccountService($this->withdrawal->account);
            $accountService->transaction($this->withdrawal, $this->withdrawal->amount);
        }
    }

    /**
     * Mark withdrawal as "in progress".
     */
    public function process($externalId)
    {
        if ($this->withdrawal->is_created) {
            // update withdrawal model
            $this->withdrawal->external_id = $externalId;
            $this->withdrawal->status = Withdrawal::STATUS_IN_PROGRESS;
            $this->withdrawal->save();
        }
    }

    /**
     * Mark withdrawal as completed (balance was already changed before).
     */
    public function complete()
    {
        if ($this->withdrawal->is_created || $this->withdrawal->is_in_progress) {
            // update withdrawal model
            $this->withdrawal->status = Withdrawal::STATUS_COMPLETED;
            $this->withdrawal->save();
        }
    }

    /**
     * Mark withdrawal as completed.
     * This function is used for manual withdrawals processing.
     */
    public function processAndComplete()
    {
        if ($this->withdrawal->is_created) {
            // update withdrawal model
            $this->withdrawal->status = Withdrawal::STATUS_COMPLETED;
            $this->withdrawal->save();
        }
    }
}
