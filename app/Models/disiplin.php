<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class disiplin extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'disiplin';
    public $timestamps = false;
    protected $casts = [
        'tanggal' => 'timestamp',
    ];

    public function administrator(): BelongsTo
    {
        return $this->belongsTo(administrator::class, 'id_admin', 'id_admin');
    }

    public function sanksi(): BelongsTo
    {
        return $this->belongsTo(administrator::class, 'id_sanksi', 'id_sanksi');
    }

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(administrator::class, 'id_siswa', 'id_siswa');
        
    }
    
}
