<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Trimester
 * @package App\Models
 * @version February 23, 2021, 12:45 am UTC
 *
 * @property string $start_date
 * @property string $end_date
 * @property boolean $is_active
 */
class Trimester extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'trimesters';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'start_date',
        'end_date',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'start_date' => 'date',
        'end_date' => 'date',
        'is_active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
