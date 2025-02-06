<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Administrator extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $guard = ['id_admin'];
    protected $table = 'administrator';
    public $timestamps = false;
    protected $fillable = ['users', 'password', 'admin_type']; // Ensure these match your database columns
    protected $hidden = ['password', 'remember_token'];
    protected $casts = [
        'password' => 'hashed',
    ];

    public function disiplin(): HasMany
    {
        return $this->hasMany(Disiplin::class, 'id_admin'. 'id_admin');
    }
}

