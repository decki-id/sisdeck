<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class SisdeckClassSchedule
 * @package App\Models
 * @version April 15, 2021, 9:53 am WIB
 *
 * @property integer $course_id
 * @property integer $class_id
 * @property integer $level_id
 * @property integer $shift_id
 * @property integer $classroom_id
 * @property integer $semester_id
 * @property integer $batch_id
 * @property integer $day_id
 * @property integer $time_id
 * @property time $start_date
 * @property time $end_date
 * @property boolean $status
 */
class SisdeckClassSchedule extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'sisdeck_class_schedules';

    protected $primaryKey = 'id';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'course_id',
        'class_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'semester_id',
        'batch_id',
        'day_id',
        'time_id',
        'start_date',
        'end_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'course_id' => 'integer',
        'class_id' => 'integer',
        'level_id' => 'integer',
        'shift_id' => 'integer',
        'classroom_id' => 'integer',
        'semester_id' => 'integer',
        'batch_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        'start_date' => 'string',
        'end_date' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required|integer',
        'class_id' => 'required|integer',
        'level_id' => 'required|integer',
        'shift_id' => 'required|integer',
        'classroom_id' => 'required|integer',
        'semester_id' => 'required|integer',
        'batch_id' => 'required|integer',
        'day_id' => 'required|integer',
        'time_id' => 'required|integer',
        'start_date' => 'required',
        'end_date' => 'required',
        'status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function course()
    {
        return $this->hasOne(SisdeckCourse::class, 'course_id', 'course_id');
    }

    public function class()
    {
        return $this->hasOne(SisdeckClass::class, 'class_id', 'class_id');
    }

    public function level()
    {
        return $this->hasOne(SisdeckLevel::class, 'id', 'level_id');
    }

    public function shift()
    {
        return $this->hasOne(SisdeckShift::class, 'id', 'shift_id');
    }

    public function classroom()
    {
        return $this->hasOne(SisdeckClassroom::class, 'id', 'classroom_id');
    }

    public function semester()
    {
        return $this->hasOne(SisdeckSemester::class, 'id', 'semester_id');
    }

    public function batch()
    {
        return $this->hasOne(SisdeckBatch::class, 'batch_id', 'batch_id');
    }

    public function day()
    {
        return $this->hasOne(SisdeckDay::class, 'id', 'day_id');
    }

    public function time()
    {
        return $this->hasOne(SisdeckTime::class, 'id', 'time_id');
    }
}