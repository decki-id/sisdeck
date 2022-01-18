<?php

namespace App\Repositories;

use App\Models\SisdeckLevel;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckLevelRepository
 * @package App\Repositories
 * @version January 5, 2021, 1:10 pm WIB
*/

class SisdeckLevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'level',
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
        return SisdeckLevel::class;
    }
}
