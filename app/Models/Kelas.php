<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'link'
    ];

    
    public function mentor()
    {
        return $this->belongsTo(Mentor::class, 'id_mentor');
    }
}
