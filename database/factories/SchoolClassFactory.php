<?php

namespace Database\Factories;

use App\Models\SchoolClass;
use App\Models\SchoolSession;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolClassFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SchoolClass::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'class_name' => $this->faker->sentence,
            'session_id' => 1,
        ];
    }
}
