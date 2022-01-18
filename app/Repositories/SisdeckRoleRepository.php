<?php

namespace App\Repositories;

use App\Models\SisdeckRole;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckRoleRepository
 * @package App\Repositories
 * @version June 9, 2021, 8:21 am WIB
*/

class SisdeckRoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'role_name'
    ];

    protected $primaryKey = 'role_id';

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
        return SisdeckRole::class;
    }
}