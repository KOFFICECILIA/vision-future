<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class School extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    public $table = 'schools';

    public $fillable = [
        'ecole',
        'code',
        'email',
        'password',
        'ville'
    ];
}
