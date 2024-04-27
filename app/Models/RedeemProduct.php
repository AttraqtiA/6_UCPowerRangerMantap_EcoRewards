<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemProduct extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function redeemTransactionDetail()
    {
        return $this->hasMany(RedeemTransactionDetail::class, 'redeemProduct_id', 'id');
    }

    public function redeemCartDetail()
    {
        return $this->hasMany(RedeemCartDetail::class, 'redeemProduct_id', 'id');
    }
}
