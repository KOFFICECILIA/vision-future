<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'title',
        'is_exam_class',
        'exam_min_point'
    ];

    public function parent(){
        return $this->belongsTo(Niveau::class, 'parent_id', 'id');
    }

}
