<?php

namespace Packages\Payments\Models;

use App\Models\Account;
use App\Models\AccountTransaction;
use App\Models\Formatters\Formatter;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use Formatter;

    const STATUS_CREATED     = 0;
    const STATUS_IN_PROGRESS = 1;
    const STATUS_COMPLETED   = 2;
    const STATUS_CANCELLED   = 3;

    protected $formats = [
        'amount' => 'decimal',
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
        return __('Withdrawal');
    }

    public function getIsCreatedAttribute()
    {
        return $this->status == self::STATUS_CREATED;
    }

    public function getIsInProgressAttribute()
    {
        return $this->status == self::STATUS_IN_PROGRESS;
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

//        $class = new \ReflectionClass(__CLASS__);
//        $constants = collect($class->getConstants());
//        return $constants->filter(function ($value, $key) {
//            return strpos($key, 'STATUS_') !== FALSE;
//        });

        return [
            self::STATUS_CREATED        => __('Created'),
            self::STATUS_IN_PROGRESS    => __('In progress'),
            self::STATUS_COMPLETED      => __('Completed'),
            self::STATUS_CANCELLED      => __('Cancelled'),
        ];
    }
}
