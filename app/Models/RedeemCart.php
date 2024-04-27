<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedeemCart extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    public function redeemCartDetail()
    {
        return $this->hasMany(RedeemCartDetail::class, 'redeemCart_id', 'id');
    }
}
