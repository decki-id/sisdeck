<?php

namespace App\Repositories;

use App\Models\SisdeckClass;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckClassRepository
 * @package App\Repositories
 * @version December 22, 2020, 11:41 am WIB
*/

class SisdeckClassRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'class_code',
        'class_name'
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
        return SisdeckClass::class;
    }
}