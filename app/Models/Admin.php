<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable; //sama ubah di config auth

class Admin extends Authenticable
{
    use HasFactory;
}
