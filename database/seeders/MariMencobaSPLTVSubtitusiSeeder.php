<?php

namespace Database\Seeders;

use App\Models\MariMencobaSpltvSubtitusi;
use Illuminate\Database\Seeder;

class MariMencobaSPLTVSubtitusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $soal_colect = collect([
            'soal_1' => ['x + 2y + z = 3', 'x - 3y + z = 8', 'x + z = 2y'],
            'soal_2' => ['2x + y + z = 16', '2x + 3y - z = 1', 'x + y + z = 6'],
            'soal_3' => ['x + y + 2z = 9', '3x - 2y - 2z = 7', 'x - y + 2z =5'],
            'ditanyakan' => ['Carilah nilai x,y dan z ', 'Berapakah nilai x+y+z ', 'Berapakah nilai x'],
            'jawaban_1' => ['9', '4', '1'],
            'jawaban_2' => ['-4', null, null],
            'jawaban_3' => ['2', null, null],
            'penjelasan_1' => [
                'x+2y+z=3 \\\\ x=3-2y-z \\ \\ \\ (4) \\\\ Maka \\ kita \\ mendapatkan \\ persamaan \\ (4), \\\\ kita \\ subtitusikan \\ ke \\ persamaan \\ lainnya \\\\ 2x+y+z=16 \\\\ 2(3-2y-z)+y+z=16 \\\\ -4y+y-2z+z+6=16  \\\\ -3y-z=10 \\ \\ \\ 	(5) \\\\ x+y+2z=9 \\\\ (3-2y-z)+y+2z=9 \\\\ -2y+y-z+2z=9-3 \\\\ -y+z=6 \\ \\ \\ (6)',
                'x-3y+z=8 \\\\ x=8+3y-z \\ \\ \\ (4) \\\\ Persamaan \\ (4) subtitusikan \\ dengan \\ persamaan \\ (2) \\ dan \\ (3) \\\\ 2x+3y-z=1 \\\\ 2(8+3y-z)+3y-z=1 \\\\ 16+6y+3y-2z-z=1 \\\\ 9y-3z=-15 \\ \\ \\ 	(5) \\\\ 3(8+3y-z)-2y-2z=7 \\\\ 24+9y-2y-3z-2z=7 \\\\ 7y-5z=-17 \\ \\ \\ (6)',
                'x=2y-z \\ \\ \\ (4) \\\\ Kita \\ bisa \\ masukan \\ persamaan \\ (4) \\\\ ke \\ persamaan \\ lainnya. \\\\ x+y+z=6 \\\\ (2y-z)+y+z=6 \\\\ 2y+y-z+z=6 \\\\ 3y=6 \\\\ y=2 \\\\ (2y-z)-y+2z=5 \\\\ 2y-y-z+2z=5 \\\\ y+z=5 \\ \\ \\ (5)',
            ],
            'penjelasan_2' => [
                '-y+z=6 \\\\ z=6+y \\ \\ \\ (7) \\\\ Subtitusikan \\ persamaan \\ (7) \\\\ -3y-z=10 \\\\ -3y-(6+y)=10 \\\\ -4y-6=10 \\\\ -4y=10+6 \\\\ y={16 \over -4} \\\\ y=-4',
                'Ambil \\ persamaan \\ yang \\ paling \\ sederhana \\ dan \\ ubah \\ menjadi \\ persamaan \\ (7) \\\\ 9y-3z=-15 \\\\ -3z=-15-9y \\\\ z={-15 \over -3}-{9 \over -3}y \\\\ z=5-3y \\ \\ \\ (7) \\\\ Subtitusikan \\ persamaan \\ (7) \\ ke \\ persamaan \\ (6) \\\\ 7y-5z=-17 \\\\ 7y-5(5-3y)=-17 \\\\ 7y-25-15y=-17 \\\\ -8y=-17+25 \\\\ y={8 \over -8} \\\\ y=-1',
                'Dari \\ persamaan \\ (2) \\ dan \\ (3) \\\\ kita \\ sudah \\ mendapatkan \\ nilai \\ dari \\ y. \\\\ karena \\ nilai \\ y \\ sudah \\ diketahui \\\\ maka \\ kita \\ bisa \\ memasukan \\\\ nilai \\ variabel \\ tersebut \\\\ ke \\ persamaan \\ (5). \\\\ y+z=5 \\\\ 2+z=5 \\\\ z=5-2z=3',
            ],
            'penjelasan_3' => [
                'Masukan \\ nilai \\ y \\ ke \\ dalam \\ persamaan \\ dua \\ variabel \\ yang \\ kita \\ dapatkan \\\\ -y+z=6 \\\\ -(-4)+z=6 \\\\ 4+z=6 \\\\ z=6-4 \\\\ z=2',
                'Maka \\ kita \\ mendapatkan \\ nilai \\ y. \\ Sekarang \\ subtitusikan \\ nilai \\ tersebut \\ ke \\ persamaan \\ dua \\ variabel \\ yang \\ kita \\ dapatkan. \\\\ 9y-3z=-15 \\\\ 9(-1)-3z=-15 \\\\ -9-3z=-15 \\\\ -3z=-15+9 \\\\ z={-6 \over -3} \\\\ z=2 \\\\ Nilai \\ tersebut \\ kita \\ bisa \\ masukan \\ ke \\ dalam \\ persamaan \\ tiga \\ variabel \\ di \\ atas \\\\ x-3y+z=8 \\\\ x-3(-1)+(2)=8 \\\\ x+3+2=8 \\\\ x+5=8 \\\\ x=8-5 \\\\ x=3',
                'x+y+z=6 \\\\ x+2+3=6 \\\\ x+5=6 \\\\ x=6-5 \\\\ x=1',
            ],
            'penjelasan_4' => [
                'x+2y+z=3 \\\\ x+2(-4)+(2)=3 \\\\ x-8+2=3 \\\\ x-6=3 \\\\ x=3+6 \\\\ x=9',
                'Maka \\ nilai \\ x+y+z \\ adalah 4 \\\\ x+y+z=⋯ \\\\ 3-1+2=4',
                null,
            ],
            'penjelasan_5' => [
                null,
                null,
                null,
            ],

        ]);
        $i = 0;
        while($i <3){
            MariMencobaSpltvSubtitusi::insert([
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
