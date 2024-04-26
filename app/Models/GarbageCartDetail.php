<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarbageCartDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function garbageCart()
    {
        return $this->belongsTo(GarbageCart::class, 'garbageCart_id', 'id');
    }

    public function garbage()
    {
        return $this->belongsTo(Garbage::class, 'garbage_id', 'id');
    }
}
