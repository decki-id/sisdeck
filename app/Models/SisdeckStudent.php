<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SisdeckStudent
 * @package App\Models
 * @version June 9, 2021, 8:25 am WIB
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $birthdate
 * @property string $gender
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $sub_district
 * @property string $district
 * @property string $province
 * @property string $nationality
 * @property integer $post_code
 * @property string $current_address
 * @property string $guardian_name
 * @property string $guardian_relation
 * @property string $guardian_phone
 * @property boolean $status
 * @property string $date_registered
 * @property integer $user_id
 * @property integer $class_id
 * @property string $image
 */
class SisdeckStudent extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sisdeck_students';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'birthdate' => 'date',
        'gender' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'address' => 'string',
        'sub_district' => 'string',
        'district' => 'string',
        'province' => 'string',
        'nationality' => 'string',
        'post_code' => 'integer',
        'current_address' => 'string',
        'guardian_name' => 'string',
        'guardian_relation' => 'string',
        'guardian_phone' => 'string',
        'status' => 'boolean',
        'date_registered' => 'date',
        'user_id' => 'integer',
        'class_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required|string|max:191',
        'last_name' => 'required|string|max:191',
        'birthdate' => 'required',
        'gender' => 'required|string|max:191',
        'phone' => 'required|string|max:191',
        'email' => 'required|string|max:191',
        'address' => 'required|string|max:191',
        'sub_district' => 'required|string|max:191',
        'district' => 'required|string|max:191',
        'province' => 'required|string|max:191',
        'nationality' => 'required|string|max:191',
        'post_code' => 'required|integer',
        'current_address' => 'nullable|string',
        'guardian_name' => 'required|string|max:191',
        'guardian_relation' => 'required|string|max:191',
        'guardian_phone' => 'required|string|max:191',
        'status' => 'required|boolean',
        'date_registered' => 'required',
        'user_id' => 'required|integer',
        'class_id' => 'required|integer',
        'image' => 'nullable|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
