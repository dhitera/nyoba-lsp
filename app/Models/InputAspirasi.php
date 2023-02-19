<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputAspirasi extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public function penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'nik');
    }
}
