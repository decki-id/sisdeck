<?php

namespace App\Repositories;

use App\Models\SisdeckBatch;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckBatchRepository
 * @package App\Repositories
 * @version January 5, 2021, 4:01 pm WIB
*/

class SisdeckBatchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'batch_name'
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
        return SisdeckBatch::class;
    }
}