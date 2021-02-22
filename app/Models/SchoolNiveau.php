<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolNiveau extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_id',
        'niveau_id'
    ];
}
