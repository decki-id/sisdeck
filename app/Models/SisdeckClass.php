<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SisdeckClass
 * @package App\Models
 * @version December 22, 2020, 11:20 am WIB
 *
 * @property string $name
 * @property string $code
 */
class SisdeckClass extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sisdeck_classes';

    protected $primaryKey = 'class_id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'class_code',
        'class_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_id' => 'integer',
        'class_code' => 'string',
        'class_name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'class_code' => 'required|string|max:191',
        'class_name' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];   
}