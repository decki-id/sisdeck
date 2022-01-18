<?php

namespace App\Repositories;

use App\Models\SisdeckFaculty;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckFacultyRepository
 * @package App\Repositories
 * @version January 7, 2021, 9:08 am WIB
*/

class SisdeckFacultyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
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
        return SisdeckFaculty::class;
    }
}
