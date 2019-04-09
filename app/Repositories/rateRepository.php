<?php

namespace App\Repositories;

use App\Models\rate;
use App\Repositories\BaseRepository;

/**
 * Class rateRepository
 * @package App\Repositories
 * @version April 9, 2019, 6:02 am UTC
*/

class rateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rateType',
        'quantity',
        'price'
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
        return rate::class;
    }
}
