<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id_siswa'];
    protected $table = 'siswa';
    public $timestamps = false;

    public function disiplin(): HasMany  
    {
        return $this->hasMany(disiplin::class, 'id_siswa'. 'id_siswa');
    }
}
