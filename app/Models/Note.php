<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Note
 * @package App\Models
 * @version February 23, 2021, 12:44 am UTC
 *
 * @property integer $note
 * @property integer $student_id
 * @property integer $matiere_level_id
 * @property integer $coefficient_note
 * @property boolean $is_active
 * @property integer $trimester_id
 */
class Note extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'notes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'note',
        'student_id',
        'matiere_level_id',
        'coefficient_note',
        'is_active',
        'trimester_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'note' => 'integer',
        'student_id' => 'integer',
        'matiere_level_id' => 'integer',
        'coefficient_note' => 'integer',
        'is_active' => 'boolean',
        'trimester_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
