<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MariMencobaSpldvGabunganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $soal_colect = collect([
            'tipe' => ['bukancerita', 'cerita'],
            'soal_1' => ['x + 3y = 1', 'Sebuah toko komputer menjual 2 flashdisk dan 1 usb hub seharga Rp. 131.000 sedangkan untuk 1 flashdisk dan 3 usb hub seharga Rp. 163.000. Jika bambang membeli 3 flashdisk dan 4 usb hub, berapakah bambang harus membayar ?'],
            'soal_2' => ['2x - y = 9', null],
            'x' => ['4', '46000'],
            'y' => ['-1', '39000'],
            'jawaban_1' => [null, '294000'],
            'jawaban_2' => [null, null],
            'penjelasan_1' => [
                '\begin{matrix} x + 3y = 1 & |\times 2| & 2x + 6y = 2 & \\\\ 2x - y = 9 & |\times 1| & \underline{2x - y = 9} & - \end{matrix} \\\\ 7y = -7 \\\\ y = {-7 \over 7} \\\\ y = -1 \\\\',
                'flashdisk = x \\\\ usb hub = y \\\\',

            ],
            'penjelasan_2' => [
                '2x - y = 9 \\\\ 2x + 1 = 9 \\\\ 2x = 9 - 1 \\\\ 2x = 8 \\\\ x = {8 \over 2} \\\\ x = 4 \\\\',
                '2x + y = 131,000 \\\\ x + 3y = 163,000 \\\\',

            ],
            'penjelasan_3' => [
                null,
                '\begin{matrix} 2x + y = 131,000 & |\times 1| & 2x + y = 131,000 & \\\\ x + 3y = 163,000 & |\times 2| & \underline{2x + 6y = 326,000} & - \end{matrix} \\\\ -5y = -195,000 \\\\ y = {-195,000 \over -5} \\\\ y = 39,000 \\\\',

            ],
            'penjelasan_4' => [
                null,
                'x + 3y = 163,000 \\\\ x + 3(39,000) = 163,000 \\\\ x + 117,000 = 163,000 \\\\ x = 163,000 - 117,000 \\\\ x = 46,000',
            ],
            'penjelasan_5' => [
                null,
                '3x + 4y = ... \\\\ 3(46,000) + 4(39,000) = ... \\\\ 138,000 + 156,000 = 294,000',
            ],

        ]);
        $i = rand(0, 1);
        return [
            'tipe' => $soal_colect['tipe'][$i],
            'soal_1' => $soal_colect['soal_1'][$i],
            'soal_2' => $soal_colect['soal_2'][$i],
            'x' => $soal_colect['x'][$i],
            'y' => $soal_colect['y'][$i],
            'jawaban_1' => $soal_colect['jawaban_1'][$i],
            'jawaban_2' => $soal_colect['jawaban_2'][$i],
            'penjelasan_1' => $soal_colect['penjelasan_1'][$i],
            'penjelasan_2' => $soal_colect['penjelasan_2'][$i],
            'penjelasan_3' => $soal_colect['penjelasan_3'][$i],
            'penjelasan_4' => $soal_colect['penjelasan_4'][$i],
            'penjelasan_5' => $soal_colect['penjelasan_5'][$i],
        ];
    }
}
