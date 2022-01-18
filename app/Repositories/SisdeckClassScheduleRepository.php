<?php

namespace App\Repositories;

use App\Models\SisdeckClassSchedule;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckClassScheduleRepository
 * @package App\Repositories
 * @version April 15, 2021, 9:53 am WIB
*/

class SisdeckClassScheduleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'class_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'semester_id',
        'batch_id',
        'day_id',
        'time_id',
        'start_date',
        'end_date',
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
        return SisdeckClassSchedule::class;
    }
}