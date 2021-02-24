<?php

namespace App\Repositories;

use App\Models\Note;
use App\Repositories\BaseRepository;

/**
 * Class NoteRepository
 * @package App\Repositories
 * @version February 24, 2021, 11:10 am UTC
*/

class NoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
