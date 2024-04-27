<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garbage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function garbageTransactionDetail()
    {
        return $this->hasMany(GarbageTransactionDetail::class, 'garbage_id', 'id');
    }

    public function garbageCartDetail()
    {
        return $this->hasMany(GarbageCartDetail::class, 'garbage_id', 'id');
    }
}
