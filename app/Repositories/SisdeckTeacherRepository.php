<?php

namespace App\Repositories;

use App\Models\SisdeckTeacher;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckTeacherRepository
 * @package App\Repositories
 * @version June 9, 2021, 8:27 am WIB
*/

class SisdeckTeacherRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'birthdate',
        'gender',
        'phone',
        'email',
        'address',
        'sub_district',
        'district',
        'province',
        'nationality',
        'post_code',
        'status',
        'date_registered',
        'user_id',
        'semester_id',
        'image'
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
        return SisdeckTeacher::class;
    }
}
