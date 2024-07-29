<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchDuration extends Model
{
    use HasFactory;

    protected $table = 'watch_duration';
    protected $fillable = [
        'id_paket',
        'duration',
        'id_user',
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
