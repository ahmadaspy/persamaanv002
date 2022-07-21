<?php

namespace Database\Seeders;

use App\Models\KuisMengenal;
use Illuminate\Database\Seeder;

class KuisMengenalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $soal_colect = collect([
            'soal_1' => [
                'Di bawah termasuk sistem persamaan linear tiga variabel, kecuali',
                'Ciri sebuah sistem persamaan linear tiga variabel merupakan',
                'Sebuah toko menjual alat kantor dengan 1 buah pensil, 2 buah pulpen seharga Rp. 10,500 , sedangkan apabila 4 buah pulpen seharga Rp. 16,000 , dan apabila harga dari ketiga item yaitu 1 buah pensil, 1 buah pulen dan 1 buah buku ditotalkan seharga Rp. 12,500. ',
                'Diketahui persamaan \(4a+5b+2c=20\).',
                'Sebuah toko menjual alat kantor dengan 1 buah pensil, 2 buah pulpen seharga Rp. 10,500 , sedangkan apabila 4 buah pulpen seharga Rp. 16,000 , dan apabila harga dari ketiga item yaitu 1 buah pensil, 1 buah pulen dan 1 buah buku ditotalkan seharga Rp. 12,500.',
            ],
            'pertanyaan' => [
                null,
                null,
                'Permisalan yang tepat dari masalah di atas adalah',
                'Bentuk kalimat yang tepat untuk menggambarkan dari persemaan tersebut adalah',
                'Bentuk model matematika yang tepat adalah',
            ],
            'pilihan_a' => [
                '\begin{matrix}
                    2x+3y+4z & = & 18 \\\\
                    5y+2x & = & z+12 \\\\
                    4x-z & = & 6 \\\\
                \end{matrix}',
                null,
                null,
                null,
                null,
            ],
            'pilihan_b' => [
                '\begin{matrix}
                    2x+3y+4z & = & 18 \\
                    5y+2x & = & z+12 \\
                    4x-z & = & 6 \\
                \end{matrix}',
                null,
                null,
                null,
                null,
            ],
            'pilihan_c' => [
                '\begin{matrix}
                    2x+3y+4z & = & 18 \\
                    5y+2x & = & z+12 \\
                    4x-z & = & 6 \\
                \end{matrix}',
                null,
                null,
                null,
                null,
            ],
            'pilihan_d' => [
                '\begin{matrix}
                    2x+3y+4z & = & 18 \\
                    5y+2x & = & z+12 \\
                    4x-z & = & 6 \\
                \end{matrix}',
                null,
                null,
                null,
                null,
            ],
            'pilihan_e' => [
                '\begin{matrix}
                    2x+3y+4z & = & 18 \\
                    5y+2x & = & z+12 \\
                    4x-z & = & 6 \\
                \end{matrix}',
                null,
                null,
                null,
                null,
            ],
            'jawaban' => [
                'a',
                'a',
                'a',
                'a',
                'a',
            ]
         ]);
        $i = 0;
        while ($i < 5) {
            KuisMengenal::insert([
                'soal_1' => $soal_colect['soal_1'][$i],
                'pertanyaan' => $soal_colect['pertanyaan'][$i],
                'pilihan_a' => $soal_colect['pilihan_a'][$i],
                'pilihan_b' => $soal_colect['pilihan_b'][$i],
                'pilihan_c' => $soal_colect['pilihan_c'][$i],
                'pilihan_d' => $soal_colect['pilihan_d'][$i],
                'pilihan_e' => $soal_colect['pilihan_e'][$i],
                'jawaban' => $soal_colect['jawaban'][$i],

            ]);
            $i++;
        }
    }
}
