<?php

namespace App\Repositories;

use App\Models\SisdeckTransaction;
use App\Repositories\BaseRepository;

/**
 * Class SisdeckTransactionRepository
 * @package App\Repositories
 * @version April 15, 2021, 9:54 am WIB
*/

class SisdeckTransactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'fee_id',
        'user_id',
        'paid',
        'transaction_date',
        'remark',
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
        return SisdeckTransaction::class;
    }
}
