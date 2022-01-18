<?php

namespace Database\Factories;

use App\Models\SisdeckTeacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class SisdeckTeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SisdeckTeacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->word,
        'last_name' => $this->faker->word,
        'birthdate' => $this->faker->word,
        'gender' => $this->faker->word,
        'phone' => $this->faker->word,
        'email' => $this->faker->word,
        'address' => $this->faker->word,
        'sub_district' => $this->faker->word,
        'district' => $this->faker->word,
        'province' => $this->faker->word,
        'nationality' => $this->faker->word,
        'post_code' => $this->faker->randomDigitNotNull,
        'status' => $this->faker->word,
        'date_registered' => $this->faker->word,
        'user_id' => $this->faker->randomDigitNotNull,
        'semester_id' => $this->faker->randomDigitNotNull,
        'image' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
