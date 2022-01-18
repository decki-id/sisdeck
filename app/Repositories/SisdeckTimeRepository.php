<?php

namespace App\Repositories;

use App\Models\SisdeckTime;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckTimeRepository
 * @package App\Repositories
 * @version January 7, 2021, 9:06 am WIB
*/

class SisdeckTimeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'time'
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
        return SisdeckTime::class;
    }
}
