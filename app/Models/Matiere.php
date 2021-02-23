<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Matiere
 * @package App\Models
 * @version February 23, 2021, 12:35 am UTC
 *
 * @property string $title
 * @property string $description
 * @property string $slug
 */
class Matiere extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'matieres';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'slug',
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
        'description' => 'string',
        'slug' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
