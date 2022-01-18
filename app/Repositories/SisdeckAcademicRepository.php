<?php

namespace App\Repositories;

use App\Models\SisdeckAcademic;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckAcademicRepository
 * @package App\Repositories
 * @version January 7, 2021, 10:16 am WIB
*/

class SisdeckAcademicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'from',
        'until'
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
        return SisdeckAcademic::class;
    }
}