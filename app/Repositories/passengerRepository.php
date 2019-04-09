<?php

namespace App\Repositories;

use App\Models\passenger;
use App\Repositories\BaseRepository;

/**
 * Class passengerRepository
 * @package App\Repositories
 * @version April 9, 2019, 6:13 am UTC
*/

class passengerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'age',
        'sex'
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
        return passenger::class;
    }
}
