<?php

namespace Database\Seeders;

use App\Models\MariMencobaSpltvEliminasi;
use Illuminate\Database\Seeder;

class MariMencobaSPLTVEliminasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal_colect = collect([
            'soal_1' => ['2x-2y-2z=9', 'x-2y+4z=-3', '4x-2y+z=-1'],
            'soal_2' => ['x-6y-3z=-28', '3x+y-2z=12', 'x-y+2z=-4'],
            'soal_3' => ['3x+2y+z=16', '2x+y-3z=11', '5x+2y+z=17'],
            'ditanyakan' => ['Carilah himpunan penyelesaian', 'Carilah himpunan penyelesaian', 'Carilah himpunan penyelesaian'],
            'jawaban_1' => ['2', '3', '2'],
            'jawaban_2' => ['12.5', '-1', '4'],
            'jawaban_3' => ['-15', '-2', '-1'],
            'penjelasan_1' => [
                '\begin{matrix} 2x-2y-2z=9 & |\times 1| & 2x-2y-2z=9 & \\\\ x-6y-3z=-28 & |\times 2| & \underline{2x-12y-6z=-56} & - \end{matrix} \\\\ 10y+4z=65 \\ \\ \\ (4)',
                '\begin{matrix} x-2y+4z=-3 & |\times 3| & 3x-6y+12z=-9 & \\\\ 3x+y-2z=12 & |\times 1| & \underline{3x+y-2z=12} & - \end{matrix} \\\\ -7y+14z=-21 \\ \\ \\ (4)',
                '\begin{matrix} 4x-2y+z=-1 & |\times 1| & 4x-2y+z=-1 & \\\\ x-y+2z=-4 & |\times 4| & \underline{4x-4y+8z=-16} & - \end{matrix} \\\\ 2y-7z=15 \\ \\ \\ (4)',
            ],
            'penjelasan_2' => [
                '\begin{matrix} x-6y-3z=-28 & |\times 3| & 3x-18y-9z=-84 & \\\\ 3x+2y+z=16 & |\times 1| & \underline{3x+2y+z=16} & - \end{matrix} \\\\ -20y-10z=-100 \\ \\ \\ (5)',
                '\begin{matrix} 3x+y-2z=12 & |\times 2| & 6x+2y-4z=24 & \\\\ 2x+y-3z=11 & |\times 3| & \underline{6x+3y-9z=33} & - \end{matrix} \\\\ -y+5z=-9 \\ \\ \\ (5)',
                '\begin{matrix} x-y+2z=-4 & |\times 5| & 5x-5y+10z=-20 & \\\\ 5x+2y+z=17 & |\times 1| & \underline{5x+2y+z=17} & - \end{matrix} \\\\ -7y+9z=-37 \\ \\ \\ (5)',
            ],
            'penjelasan_3' => [
                '\begin{matrix} 10y+4z=-28 & |\times 20| & 200y+80z=1300 & \\\\ -20y-10z=-100 & |\times 10| & \underline{-20y-10z=-100} & - \end{matrix} \\\\ -20z=300 \\\\ z={300 \over -20} \\\\ z=-15',
                '\begin{matrix} -7y+14z=-21 & |\times 1| & -7y+14z=-21 & \\\\ -y+5z=-9 & |\times 7| & \underline{-7y+35z=-63} & - \end{matrix} \\\\ -21z=42 \\\\ z=-2',
                '\begin{matrix} 2y-7z=15 & |\times 7| & 14y-49z=105 & \\\\ -7y+9z=-37 & |\times 2| & \underline{-14y+18z=-74} & + \end{matrix} \\\\ -31z=31 \\\\ z=-1',
            ],
            'penjelasan_4' => [
                '\begin{matrix} 10y+4z=-28 & |\times 10| & 100y+40z=650 & \\\\ -20y-10z=-100 & |\times 4| & \underline{-80y-40z=-400} & - \end{matrix} \\\\ 20y=250 \\\\ y={250 \over 20} \\\\ y=12.5',
                '\begin{matrix} -7y+14z=-21 & |\times 5| & -35y+70z=-105 & \\\\ -y+5z=-9 & |\times 14| & \underline{-14y+70z=-126} & - \end{matrix} \\\\ -21y=21 \\\\ y=-1',
                '\begin{matrix} 2y-7z=-15 & |\times 9| & 18y-63z=135 & \\\\ -7y+9z=-37 & |\times 7| & \underline{-49y+63z=-259} & + \end{matrix} \\\\ -31y=-124 \\\\ y=4',
            ],
            'penjelasan_5' => [
                '2x-2y-2z=9 \\\\ 2x-2{25 \over 2}-2(-15)=9 \\\\ 2x-25+30=9 \\\\ 2x+5=9 \\\\ 2x=9-5 \\\\ x={4 \over 2} \\\\ x=2',
                'x-2y+4z=-3 \\\\ x-2(-1)+4(-2)=-3 \\\\ x-2-8=-3 \\\\ x-6=-3 \\\\ x=-3+6 \\\\ x=3',
                '4x-2y+z=-1 \\\\ 4x-2(4)+(-1)=-1 \\\\ 4x-8-1=-1 \\\\ 4x-9=-1 \\\\ 4x=-1+9 \\\\ 4x=8 \\\\ x=2',
            ],
        ]);
        $i=0;
        while ($i < 3){
            MariMencobaSpltvEliminasi::insert([
                'soal_1' => $soal_colect['soal_1'][$i],
                'soal_2' => $soal_colect['soal_2'][$i],
                'soal_3' => $soal_colect['soal_3'][$i],
                'ditanyakan' => $soal_colect['ditanyakan'][$i],
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
