<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportsRegistration extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'department', 'year_level', 'sport'];
}
