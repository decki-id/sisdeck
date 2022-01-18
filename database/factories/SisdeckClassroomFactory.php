<?php

namespace Database\Factories;

use App\Models\SisdeckClassroom;
use Illuminate\Database\Eloquent\Factories\Factory;

class SisdeckClassroomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SisdeckClassroom::class;

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
        'description' => $this->faker->text,
        'status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}