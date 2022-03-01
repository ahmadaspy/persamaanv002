<?php

namespace Database\Seeders;

use App\Models\KuisPertama;
use Illuminate\Database\Seeder;

class KuisPertamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal_colect = collect([
            'soal_1' => ['x+y-z=1', '2x+y-4z=-4', '2x+3y-2z=-5', '2x+3y+z=-4', 'x+2y+z=8', 'x+3y+2z=12', '2a+3b+c=7', '2x+y+7z=-6', '2x+7y+3z=9', '4x-y+z=11'],
            'soal_2' => ['2x+3y+2z=-8', 'x+5y+2z=15', '4x+5y+2z=15', '4x+2y-z=-13', '3x+4y+3z=20', '2x+y+z=8', '-3a+4b-5c=-5', '-6x+4y+2y=6', '3x-y-4z=-9', '2x-y+2z=9'],
            'soal_3' => ['4x-2y-3z=-11', '3x+2y-6z=-5', 'x+y-5z=22', '3x-2y+3z=5', '2x+y=4', 'x+2y+3z=12', 'a-2b+3c=-3', 'x+2y+8z=-6', '4x+2y+z=10', '3x+4y+5z=12'],
            'pertanyaan_soal' => ['berapakan nilai 2y-z', 'Berapakah nilai x, y dan z', 'Berapakah nilai dari z+y', 'Berapakah nilai x-z', 'Berapakah nilai x+y+z', 'Berapkah nilai 2x-z', 'Berapakah nilai dari a-b+c', 'Berapakah nilai dari y-2x', 'Berapakah nilai dari x,y dan z', 'Berapakah nilai dari x,y dan z'],
            'jawaban_1' => ['7', '1', '3', '-5', '6', '2', '4', '3', '2', '2'],
            'jawaban_2' => [null, '2', null, null, null, null, null, null, '-1', '-1'],
            'jawaban_3' => [null, '2', null, null, null, null, null, null, '4', '2'],

        ]);
        $i=0;
        while($i < 10){
            KuisPertama::insert([
                'soal_1' => $soal_colect['soal_1'][$i],
                'soal_2' => $soal_colect['soal_2'][$i],
                'soal_3' => $soal_colect['soal_3'][$i],
                'pertanyaan_soal' => $soal_colect['pertanyaan_soal'][$i],
                'jawaban_1' => $soal_colect['jawaban_1'][$i],
                'jawaban_2' => $soal_colect['jawaban_2'][$i],
                'jawaban_3' => $soal_colect['jawaban_3'][$i],
            ]);
            $i++;
        }
    }
}
