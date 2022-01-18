<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SisdeckCourse
 * @package App\Models
 * @version January 6, 2021, 1:25 pm WIB
 *
 * @property string $name
 * @property string $code
 * @property string $description
 * @property boolean $status
 */
class SisdeckCourse extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sisdeck_courses';

    protected $primaryKey = 'course_id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'course_code',
        'course_name',
        'course_description',
        'course_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'course_id' => 'integer',
        'course_code' => 'string',
        'course_name' => 'string',
        'course_description' => 'string',
        'course_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_code' => 'required|string|max:191',
        'course_name' => 'required|string|max:191',
        'course_description' => 'required|string',
        'course_status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];   
}