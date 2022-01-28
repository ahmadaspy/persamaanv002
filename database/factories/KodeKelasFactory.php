<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KodeKelasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_kelas' => rand(1, 9999),
        ];
    }
}
