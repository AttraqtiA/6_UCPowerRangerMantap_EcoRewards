<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function UserMisi()
    {
        return $this->hasMany(UserMisi::class, 'misi_id', 'id');
    }
}
