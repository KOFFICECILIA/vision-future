<?php

namespace App\Repositories;

use App\Models\Classe;
use App\Repositories\BaseRepository;

/**
 * Class ClasseRepository
 * @package App\Repositories
 * @version February 23, 2021, 12:31 am UTC
*/

class ClasseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'school_id',
        'title',
        'level_id'
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
        return Classe::class;
    }
}
