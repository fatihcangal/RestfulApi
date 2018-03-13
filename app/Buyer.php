<?php

namespace App;
use App\Scopes\BuyerScope;
use App\Transaction;

/**
 * @property mixed transactions
 */
class Buyer extends User
{
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope(new BuyerScope);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
