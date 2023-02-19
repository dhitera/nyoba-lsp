<?php

namespace App\Models;

use App\Models\Aspirasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    use HasFactory;
    
    public $table = "kategoris";
    public function aspirasi() {
        return $this->belongsTo(Aspirasi::class);
    }
}
