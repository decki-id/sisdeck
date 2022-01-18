<?php

namespace App\Repositories;

use App\Models\SisdeckSemester;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckSemesterRepository
 * @package App\Repositories
 * @version July 19, 2021, 5:10 pm WIB
*/

class SisdeckSemesterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'name',
        'duration',
        'description'
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
        return SisdeckSemester::class;
    }
}