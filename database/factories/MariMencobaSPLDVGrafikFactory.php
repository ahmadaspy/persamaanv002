<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MariMencobaSPLDVGrafikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $soal_colect = collect([
            'soal_1' => ['6x + 3y = 12', '3x + y = 15'],
            'soal_2' => ['8x - 2y = 4', 'x + y = 7'],
            'x1_1' => ['0', '0'],
            'x1_2' => ['2', '5'],
            'y1_1' => ['4', '15'],
            'y1_2' => ['0', '0'],
            'x2_1' => ['0', '0'],
            'x2_2' => ['0.5', '7'],
            'y2_1' => ['-2', '7'],
            'y2_2' => ['0', '0'],
            'TP_1' => ['1', '4'],
            'TP_2' => ['2', '3'],
            'soal_1_x' => [
                '6x + 3y = 12 \\\\ 6(0) + 3y = 12 \\\\ 3y = 12 \\\\ y = {12 \over 3} \\\\ y = 4 \\\\',
                '3x + y = 15 \\\\ 3(0) + y = 15 \\\\ y = 15 \\\\'
            ],
            'soal_1_y' => [
                '6x + 3y = 12 \\\\ 6x + 3(0) =12 \\\\ 6x = 12 \\\\ x = {12 \over 6} \\\\ x = 2 \\\\',
                '3x + y = 15 \\\\ 3x + (0) =15 \\\\ 3x = 15 \\\\ x = {15 \over 3} \\\\ x = 5 \\\\'
            ],
            'soal_2_x' => [
                '8x - 2y = 4 \\\\ 8(0) - 2y = 4 \\\\ -2y = 4 \\\\ y = {4 \over -2} \\\\ y = -2 \\\\',
                'x + y = 7 \\\\ (0) + y = 7 \\\\ y = 7 \\\\ '
            ],
            'soal_2_y' => [
                '8x - 2y = 4 \\\\ 8x - 2(0) = 4 \\\\ 8x = 4 \\\\ x = {4 \over 8} \\\\ x = 0.5 \\\\',
                'x + y = 7 \\\\ x + (0) = 7 \\\\ x = 7 \\\\'
            ],
            'link_geogebra' => ['https://www.geogebra.org/classic/xeeyktvj', 'https://www.geogebra.org/classic/av3phyqx'],
        ]);
        $i = rand(0, 1);
        return [
            'soal_1' => $soal_colect['soal_1'][$i],
            'soal_2' => $soal_colect['soal_2'][$i],
            'x1_1' => $soal_colect['x1_1'][$i],
            'x1_2' => $soal_colect['x1_2'][$i],
            'y1_1' => $soal_colect['y1_1'][$i],
            'y1_2' => $soal_colect['y1_2'][$i],
            'x2_1' => $soal_colect['x2_1'][$i],
            'x2_2' => $soal_colect['x2_2'][$i],
            'y2_1' => $soal_colect['y2_1'][$i],
            'y2_2' => $soal_colect['y2_2'][$i],
            'TP_1' => $soal_colect['TP_1'][$i],
            'TP_2' => $soal_colect['TP_2'][$i],
            'soal_1_x' => $soal_colect['soal_1_x'][$i],
            'soal_1_y' => $soal_colect['soal_1_y'][$i],
            'soal_2_x' => $soal_colect['soal_2_x'][$i],
            'soal_2_y' => $soal_colect['soal_2_y'][$i],
            'link_geogebra' => $soal_colect['link_geogebra'][$i],
        ];
    }
}