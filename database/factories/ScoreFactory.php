<?php

namespace Database\Factories;

use App\Models\Score;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Score::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'score' => $this->faker->numberBetween(0, 99999),
            'created_at' => $this->faker->dateTimeThisDecade,
        ];
    }
}
