<?php

namespace App\Repositories;

use App\Models\Matiere;
use App\Repositories\BaseRepository;

/**
 * Class MatiereRepository
 * @package App\Repositories
 * @version February 23, 2021, 12:35 am UTC
*/

class MatiereRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'slug'
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
        return Matiere::class;
    }
}
