<?php

namespace Packages\Payments\Models;

use App\Models\Account;
use App\Models\AccountTransaction;
use App\Models\Formatters\Formatter;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use Formatter;

    const STATUS_PENDING   = 0;
    const STATUS_COMPLETED = 1;
    const STATUS_CANCELLED = 2;

    protected $formats = [
        'amount'            => 'decimal',
        'payment_amount'    => 'variableDecimal'
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function transaction()
    {
        return $this->morphOne(AccountTransaction::class, 'transactionable');
    }

    public function getTitleAttribute()
    {
        return __('Deposit');
    }

    public function getIsPendingAttribute()
    {
        return $this->status == self::STATUS_PENDING;
    }

    public function getIsCompletedAttribute()
    {
        return $this->status == self::STATUS_COMPLETED;
    }

    public function getIsCancelledAttribute()
    {
        return $this->status == self::STATUS_CANCELLED;
    }

    public static function statuses()
    {
        return [
            self::STATUS_PENDING    => __('Pending'),
            self::STATUS_COMPLETED  => __('Completed'),
            self::STATUS_CANCELLED  => __('Cancelled'),
        ];
    }
}
