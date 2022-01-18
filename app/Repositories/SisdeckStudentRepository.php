<?php

namespace App\Repositories;

use App\Models\SisdeckStudent;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckStudentRepository
 * @package App\Repositories
 * @version June 9, 2021, 8:25 am WIB
*/

class SisdeckStudentRepository extends BaseRepository
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
        'current_address',
        'guardian_name',
        'guardian_relation',
        'guardian_phone',
        'status',
        'date_registered',
        'user_id',
        'class_id',
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
        return SisdeckStudent::class;
    }
}
