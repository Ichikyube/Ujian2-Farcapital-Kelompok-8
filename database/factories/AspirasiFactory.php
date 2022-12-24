<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aspirasi>
 */
class AspirasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'cerita' => $this->faker->paragraph(),
            'foto' => 'img/Aspirasi/error.PNG',
            'status' => mt_rand(0, 1)
        ];
    }
}
