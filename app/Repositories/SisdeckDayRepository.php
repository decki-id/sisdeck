<?php

namespace App\Repositories;

use App\Models\SisdeckDay;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckDayRepository
 * @package App\Repositories
 * @version January 7, 2021, 10:44 am WIB
*/

class SisdeckDayRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'day'
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
        return SisdeckDay::class;
    }
}