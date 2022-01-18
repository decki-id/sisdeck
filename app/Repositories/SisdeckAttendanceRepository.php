<?php

namespace App\Repositories;

use App\Models\SisdeckAttendance;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckAttendanceRepository
 * @package App\Repositories
 * @version January 7, 2021, 9:47 am WIB
*/

class SisdeckAttendanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'class_id',
        'subject_id',
        'teacher_id',
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
        return SisdeckAttendance::class;
    }
}
