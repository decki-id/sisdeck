<?php

namespace App\Repositories;

use App\Models\SisdeckClassroom;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckClassroomRepository
 * @package App\Repositories
 * @version January 5, 2021, 11:05 am WIB
*/

class SisdeckClassroomRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'name',
        'description',
        'status'
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
        return SisdeckClassroom::class;
    }
}