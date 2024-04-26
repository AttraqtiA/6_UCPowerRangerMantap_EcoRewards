<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarbageTransactionDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function garbageTransaction()
    {
        return $this->belongsTo(GarbageTransaction::class, 'garbageTransaction_id', 'id');
    }

    public function garbage()
    {
        return $this->belongsTo(Garbage::class, 'garbage_id', 'id');
    }
}
