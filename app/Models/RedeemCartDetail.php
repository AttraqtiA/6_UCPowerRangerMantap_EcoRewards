<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemCartDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function redeemCart()
    {
        return $this->hasMany(RedeemCart::class, 'redeemCart_id', 'id');
    }

    public function redeemProduct()
    {
        return $this->hasMany(RedeemProduct::class, 'redeemProduct_id', 'id');
    }
}
