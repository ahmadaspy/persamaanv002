<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MariMencobaSpldvElminasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $soal_colect = collect([
            'soal_1' => ['x + 2y = 7', '{1 \over 3}x + {3 \over 4}y = 11'],
            'soal_2' => ['x + y = 4', '{1 \over 2}x - {1 \over 3}y = -1'],
            'x' => ['1', '6'],
            'y' => ['3', '12'],
            'penjelasan_1' => [
                '\begin{matrix} x + 2y = 7 & \\\\ \underline{x + y = 4} & - \end{matrix} \\\\ y = 3 \\\\',
                '{1 \over 3}x + {3 \over 4}y = 11 \\ (\times 12) \\ 4x + 9y = 132 \\\\ {1 \over 2}x + {1 \over 3}y = -1 \\ (\times 6) \\ 3x - 2y = -6 \\\\',

            ],
            'penjelasan_2' => [
                '\begin{matrix} x + 2y = 7 & |\times 1| & x + 2y = 7 & \\\\ x + y = 4 & |\times 2| & \underline{2x + 2y = 8} & - \end{matrix} \\\\ -x = -1 \\\\ x = 1 \\\\',
                '\begin{matrix} 4x + 9y = 132 & |\times 3| & 12x + 27y = 396 & \\\\ 3x - 2y = -6 & |\times 4| & \underline{12x - 8y = -24} & - \end{matrix} \\\\ 35y = 420 \\\\ y = {420 \over 35} \\\\ y = 12 \\\\',

            ],
            'penjelasan_3' => [
                null,
                '\begin{matrix} 4x + 9y = 132 & |\times 2| & 8x + 18y = 264 & \\\\ 3x - 2y = -6 & |\times 9| & \underline{27x - 18y = -54} & - \end{matrix} \\\\ 35x = 210 \\\\ x = {210 \over 35} \\\\ x = 6 \\\\',

            ],
            'penjelasan_4' => [
                null,
                null,

            ],

        ]);
        $i = rand(0, 1);
        return [
            'soal_1' => $soal_colect['soal_1'][$i],
            'soal_2' => $soal_colect['soal_2'][$i],
            'x' => $soal_colect['x'][$i],
            'y' => $soal_colect['y'][$i],
            'penjelasan_1' => $soal_colect['penjelasan_1'][$i],
            'penjelasan_2' => $soal_colect['penjelasan_2'][$i],
            'penjelasan_3' => $soal_colect['penjelasan_3'][$i],
            'penjelasan_4' => $soal_colect['penjelasan_4'][$i],
        ];
    }
}