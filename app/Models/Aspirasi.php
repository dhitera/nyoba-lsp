<?php

namespace App\Models;

use App\Models\Kategori;
use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aspirasi extends Model
{
    use HasFactory;
    
    protected $guarded = []; 

    public function kategori() {
        return $this->hasMany(Kategori::class);
    }
}
