<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Classe
 * @package App\Models
 * @version February 23, 2021, 12:31 am UTC
 *
 * @property integer $school_id
 * @property string $title
 * @property integer $level_id
 */
class Classe extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'classes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'school_id',
        'title',
        'level_id', 
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'school_id' => 'integer',
        'title' => 'string',
        'level_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function school(){
        return $this->belongsTo(School::class, 'school_id', 'id');
    }
    
    public function level(){
        return $this->belongsTo(Level::class, 'level_id', 'id');
    }

    public function students(){
        return $this->hasMany(Student::class, 'classe_id', 'id');
    }
}
