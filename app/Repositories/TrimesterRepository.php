<?php

namespace App\Repositories;

use App\Models\Trimester;
use App\Repositories\BaseRepository;

/**
 * Class TrimesterRepository
 * @package App\Repositories
 * @version February 23, 2021, 12:45 am UTC
*/

class TrimesterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'start_date',
        'end_date',
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
        return Trimester::class;
    }
}
