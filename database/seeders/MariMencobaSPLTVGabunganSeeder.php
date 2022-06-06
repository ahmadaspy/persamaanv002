<?php

namespace Database\Seeders;

use App\Models\MariMencobaSpltvGabungan;
use Illuminate\Database\Seeder;

class MariMencobaSPLTVGabunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal_colect = collect([
            'soal_1' => ['2x-2y+z=13', 'x-2y+z=1'],
            'soal_2' => ['2x+3y-z=-9', '2x+y+2z=-13'],
            'soal_3' => ['x-2y+z=11', '3x+4y-2z=-7'],
            'ditanyakan' => ['Carilah himpunan penyelesaian', 'Carilah himpunan penyelesaian'],
            'placeholder_jawaban_1' => ['Nilai x', 'Nilai x'],
            'placeholder_jawaban_2' => ['Nilai y', 'Nilai y'],
            'placeholder_jawaban_3' => ['Nilai z', 'Nilai z'],
            'jawaban_1' => ['2', '-1'],
            'jawaban_2' => ['-4', '-3'],
            'jawaban_3' => ['-1', '-4'],
            'penjelasan_1' => [
                '\begin{matrix} 2x-2y+z=13 & \\\\ \underline{2x+3y-z=-9} & + \end{matrix} \\\\ 4x+y=4 \\ \\ \\ (4)',
                '\begin{matrix} x-2y+z=1 & |\times 2| & 2x-4y+2z=2 & \\\\ 2x+y+2z=-13 & |\times 1| & \underline{2x+y+2z=-13} & - \end{matrix} \\\\ -5y=15 \\\\ y=-3',

            ],
            'penjelasan_2' => [
                '\begin{matrix} 2x+3y-z=-9 & \\\\ \underline{x-2y+z=11} & + \end{matrix} \\\\ 3x+y=2 \\ \\ \\ (5)',
                '\begin{matrix} 2x+y+2z=-13 & |\times 3| & 6x+3y+6z=-39 & \\\\ 3x+4y-2z=-7 & |\times 2| & \underline{6x+8y-4z=-14} & - \end{matrix} \\\\ -5y+10z=-25 \\ \\ \\ (4)',

            ],
            'penjelasan_3' => [
                '\begin{matrix} 4x+y=4 & \\\\ \underline{3x+y=2} & - \end{matrix} \\\\ x=2',
                '-5y+10z=-25 \\\\ -5(-3)+10z=-25 \\\\ 15+10z=-25 \\\\ 10z=-25-15 \\\\ z={-40 \over 10} \\\\ z=-4',

            ],
            'penjelasan_4' => [
                '4x+y=4 \\\\ 4(2)+y=4 \\\\ 8+y=4 \\\\ y=-4',
                'x-2y+z=1 \\\\ x-2(-3)+(-4)=1 \\\\ x+6-4=1 \\\\ x+2=1 \\\\ x=-1',

            ],
            'penjelasan_5' => [
                'x-2y+z=11 \\\\ (2)-2(-4)+z=11 \\\\ 2+8+z=11 \\\\ 10+z=11 \\\\ z=-1',
                null,

            ],
        ]);
        $i=0;
        while($i<2){
            MariMencobaSpltvGabungan::insert([
                'soal_1' => $soal_colect['soal_1'][$i],
                'soal_2' => $soal_colect['soal_2'][$i],
                'soal_3' => $soal_colect['soal_3'][$i],
                'ditanyakan' => $soal_colect['ditanyakan'][$i],
                'placeholder_jawaban_1' => $soal_colect['placeholder_jawaban_1'][$i],
                'placeholder_jawaban_2' => $soal_colect['placeholder_jawaban_2'][$i],
                'placeholder_jawaban_3' => $soal_colect['placeholder_jawaban_3'][$i],
                'jawaban_1' => $soal_colect['jawaban_1'][$i],
                'jawaban_2' => $soal_colect['jawaban_2'][$i],
                'jawaban_3' => $soal_colect['jawaban_3'][$i],
                'penjelasan_1' => $soal_colect['penjelasan_1'][$i],
                'penjelasan_2' => $soal_colect['penjelasan_2'][$i],
                'penjelasan_3' => $soal_colect['penjelasan_3'][$i],
                'penjelasan_4' => $soal_colect['penjelasan_4'][$i],
                'penjelasan_5' => $soal_colect['penjelasan_5'][$i],
            ]);
            $i++;
        }
    }
}
