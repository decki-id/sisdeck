<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SisdeckSemester
 * @package App\Models
 * @version July 19, 2021, 5:10 pm WIB
 *
 * @property string $code
 * @property string $name
 * @property string $duration
 * @property string $description
 */
class SisdeckSemester extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sisdeck_semesters';

    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'code',
        'name',
        'duration',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'name' => 'string',
        'duration' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'code' => 'required|string|max:191',
        'name' => 'required|string|max:191',
        'duration' => 'required|string|max:191',
        'description' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];    
}
