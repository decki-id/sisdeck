<?php

namespace App\Repositories;

use App\Models\SisdeckShift;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckShiftRepository
 * @package App\Repositories
 * @version January 5, 2021, 4:37 pm WIB
*/

class SisdeckShiftRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'shift'
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
        return SisdeckShift::class;
    }
}
