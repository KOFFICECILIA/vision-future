<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Level
 * @package App\Models
 * @version February 23, 2021, 12:24 am UTC
 *
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property integer $parent_id
 * @property boolean $is_exam_level
 * @property boolean $is_active
 */
class Level extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'levels';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'description',
        'parent_id',
        'is_exam_level',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'parent_id' => 'integer',
        'is_exam_level' => 'boolean',
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
