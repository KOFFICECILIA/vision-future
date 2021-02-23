<?php

namespace App\Repositories;

use App\Models\MatiereLevel;
use App\Repositories\BaseRepository;

/**
 * Class MatiereLevelRepository
 * @package App\Repositories
 * @version February 23, 2021, 12:36 am UTC
*/

class MatiereLevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'matiere_id',
        'level_id',
        'coefficient',
        'is_active'
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
        return MatiereLevel::class;
    }
}
