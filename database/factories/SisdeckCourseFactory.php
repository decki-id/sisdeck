<?php

namespace Database\Factories;

use App\Models\SisdeckCourse;
use Illuminate\Database\Eloquent\Factories\Factory;

class SisdeckCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SisdeckCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'course_code' => $this->faker->word,
        'course_name' => $this->faker->word,
        'course_description' => $this->faker->text,
        'course_status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}