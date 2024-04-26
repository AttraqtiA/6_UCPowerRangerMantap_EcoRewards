<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemTransactionDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function redeemProduct()
    {
        return $this->hasMany(RedeemProduct::class, 'redeemProduct_id', 'id');
    }

    public function redeemTransaction()
    {
        return $this->hasMany(RedeemTransaction::class, 'redeemTransaction_id', 'id');
    }
}
