<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'role_id',
        'is_login',
        'is_active',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function garbageCart()
    {
        return $this->hasMany(GarbageCart::class, 'user_id', 'id');
    }

    public function garbageTransaction()
    {
        return $this->hasMany(GarbageTransaction::class, 'user_id', 'id');
    }

    public function redeemCart()
    {
        return $this->hasMany(RedeemCart::class, 'user_id', 'id');
    }

    public function redeemTransaction()
    {
        return $this->hasMany(RedeemTransaction::class, 'user_id', 'id');
    }
}
