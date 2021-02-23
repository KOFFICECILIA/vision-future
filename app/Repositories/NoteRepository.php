<?php

namespace App\Repositories;

use App\Models\Note;
use App\Repositories\BaseRepository;

/**
 * Class NoteRepository
 * @package App\Repositories
 * @version February 23, 2021, 12:44 am UTC
*/

class NoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'note',
        'student_id',
        'matiere_level_id',
        'coefficient_note',
        'is_active',
        'trimester_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Note::class;
    }
}
