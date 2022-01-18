<?php

namespace Database\Factories;

use App\Models\SisdeckSemester;
use Illuminate\Database\Eloquent\Factories\Factory;

class SisdeckSemesterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SisdeckSemester::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'code' => $this->faker->word,
        'name' => $this->faker->word,
        'duration' => $this->faker->word,
        'description' => $this->faker->text,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}