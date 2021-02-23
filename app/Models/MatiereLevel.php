<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MatiereLevel
 * @package App\Models
 * @version February 23, 2021, 12:36 am UTC
 *
 * @property integer $matiere_id
 * @property integer $level_id
 * @property integer $coefficient
 * @property boolean $is_active
 */
class MatiereLevel extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'matiere_levels';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'matiere_id',
        'level_id',
        'coefficient',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'matiere_id' => 'integer',
        'level_id' => 'integer',
        'coefficient' => 'integer',
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
