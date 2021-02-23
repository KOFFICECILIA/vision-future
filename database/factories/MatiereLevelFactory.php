<?php

namespace Database\Factories;

use App\Models\MatiereLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereLevelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MatiereLevel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matiere_id' => $this->faker->randomDigitNotNull,
        'level_id' => $this->faker->randomDigitNotNull,
        'coefficient' => $this->faker->randomDigitNotNull,
        'is_active' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
