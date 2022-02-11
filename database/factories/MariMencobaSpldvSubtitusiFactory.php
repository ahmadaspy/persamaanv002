<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MariMencobaSpldvSubtitusiFactory extends Factory
{
    /**
     * Define the model's default state.

     *
     * @return array
     */
    public function definition()
    {
        $soal_colect = collect([
            'soal_1' => ['2x + 5y = 16', '3x - 2y = {1 \over 2}', 'x + 2y = 5'],
            'soal_2' => ['x - y = 1', 'x + 4y = 1{1 \over 3}', '3x - 3y = 6'],
            'x' => ['3', '0.3', '3'],
            'y' => ['2', '0.25', '1'],
            'penjelasan_1' => [
                '2x + 5y = 16 \\\\ 5y = 16 - 2x \\\\ y = {16 \over 5} - {2 \over 5}x \\\\ y = {15 \over 5} + {1 \over 5} - {2 \over 5}x \\\\ y = 3{1 \over 5} - {2 \over 5}x \\\\',
                '3x - 2y = {1 \over 2} \\\\ -2y = {1 \over 2} + 3x \\\\ y = {1 \over 2} \times -{1 \over 2} + {3 \over 2}x \\\\ y = -{1 \over 4} + {3 \over 2}x \\\\ y = -{1 \over 4} + 1{1 \over 2}x \\\\',
                'x + 2y = 5 \\\\ 2y = 5 -x \\\\ y = {5 \over 2} - {1 \over 2}x \\\\ y = 2{1 \over 2} - {1 \over 2}x \\\\',
            ],
            'penjelasan_2' => [
                'x - y = 1 \\\\ -y = 1 - x \\\\ y = -1 + x \\\\',
                'x + 4y = 1{1 \over 3} \\\\  4y = 1{1 \over 3} - x \\\\ 4y = {4 \over 3} - x \\\\ y = {4 \over 3} \times {1 \over 4} - {1 \over 4}x \\\\ y = {4 \over 12} - {1 \over 4}x \\\\ y = {1 \over 3} - {1 \over 4}x \\\\',
                '3x - 3y = 6 \\\\ -3y = 6 - 3x \\\\ y = -{6 \over 3} + {3 \over 3}x \\\\ y = -2 + x \\\\',
            ],
            'penjelasan_3' => [
                'y = 3{1 \over 5} - {2 \over 5}x \\\\ (-1 + x) = 3{1 \over 5} - {2 \over 5}x \\\\ x + {2 \over 5}x = 3{1 \over 5} + 1 \\\\ {5 \over 5}x + {2 \over 5}x = {16 \over 5} + {5 \over 5} \\\\ {7 \over 5}x = {21 \over 5} \\\\ x = {21 \over 5} : {7 \over 5} \\\\ x = {105 \over 35} \\\\ x = 3 \\\\',
                'y = {1 \over 3} - {1 \over 4}x \\\\ -{1 \over 4} + 1{1 \over 2}x = {1 \over 3} - {1 \over 4}x \\\\ {1 \over 4}x + {3 \over 2}x = {1 \over 3} + {1 \over 4} \\\\ {1 \over 4}x + {6 \over 4}x = {4 \over 12} + {3 \over 12} \\\\ {7 \over 4}x = {7 \over 12}  \\\\ x = {7 \over 12} : {7 \over 4} \\\\ x = {28 \over 84} = {1 \over 3} \\\\',
                'y = -2 + x \\\\ 2{1 \over 2} - {1 \over 2}x = -2 + x \\\\ -x - {1 \over 2}x = -2 - {5 \over 2} \\\\ -{2 \over 2}x - {1 \over 2}x = -{4 \over 2} - {5 \over 2} \\\\ -{3 \over 2}x = -{9 \over 2} \\\\ x = -{9 \over 2} : -{3 \over 2} \\\\ x = {18 \over 6} = 3 \\\\',
            ],
            'penjelasan_4' => [
                'y = -1 + x \\\\ y = -1 + 3 \\\\ y = 2 \\\\',
                'y = -{1 \over 4} + 1{1 \over 2}x \\\\ y = -{1 \over 4} + {3 \over 2}({1 \over 3}) \\\\ y = -{1 \over 4} + {3 \over 6} \\\\ y = -{3 \over 12} + {6 \over 12} \\\\ y = {3 \over 12} \\\\ y = {1 \over 4} \\\\',
                'y = -2 + x \\\\ y = -2 + 3 \\\\ y = 1',
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