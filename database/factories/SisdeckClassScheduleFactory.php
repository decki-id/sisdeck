<?php

namespace Database\Factories;

use App\Models\SisdeckClassSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class SisdeckClassScheduleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SisdeckClassSchedule::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'course_id' => $this->faker->randomDigitNotNull,
        'class_id' => $this->faker->randomDigitNotNull,
        'level_id' => $this->faker->randomDigitNotNull,
        'shift_id' => $this->faker->randomDigitNotNull,
        'classroom_id' => $this->faker->randomDigitNotNull,
        'semester_id' => $this->faker->randomDigitNotNull,
        'batch_id' => $this->faker->randomDigitNotNull,
        'day_id' => $this->faker->randomDigitNotNull,
        'time_id' => $this->faker->randomDigitNotNull,
        'start_date' => $this->faker->word,
        'end_date' => $this->faker->word,
        'status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}