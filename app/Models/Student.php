<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Student
 * @package App\Models
 * @version February 23, 2021, 12:40 am UTC
 *
 * @property string $matricule
 * @property string $name
 * @property string $lastname
 * @property boolean $gender
 * @property string $photo
 * @property integer $classe_id
 * @property string $birthday
 */
class Student extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'students';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'matricule',
        'name',
        'lastname',
        'gender',
        'photo',
        'classe_id',
        'birthday',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'matricule' => 'string',
        'name' => 'string',
        'lastname' => 'string',
        'gender' => 'boolean',
        'photo' => 'string',
        'classe_id' => 'integer',
        'birthday' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function classe(){
        return $this->belongsTo(Classe::class, 'classe_id', 'id');
    }
    
}
