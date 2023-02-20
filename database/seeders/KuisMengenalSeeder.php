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
                'Pengertian dari sistem persamaan linear tiga variabel adalah:',
                'Bentuk umum dari sistem persamaan linear tiga variabel yang terdiri dari tiga persamaan dan tiga variabel adalah sebagai berikut:',
                'Jika sistem persamaan linear tiga variabel memiliki tiga persamaan dan empat variabel, apakah solusi dari sistem persamaan tersebut selalu ada ?',
                'Dalam sistem persamaan linear tiga variabel, apabila ketiga persamaannya sejajar, maka solusi dari sistem persamaan tersebut :',
                'Berapa banyak variabel yang terdapat pada sistem persamaan linear tiga variabel ?',
            ],
            'pertanyaan' => [
                null,
                null,
                'Permisalan yang tepat dari masalah di atas adalah',
                'Bentuk kalimat yang tepat untuk menggambarkan dari persemaan tersebut adalah',
                'Bentuk model matematika yang tepat adalah',
                null,
                null,
                null,
                null,
                null,
            ],
            'pilihan_a' => [
                '\begin{matrix}
                    2x+3y+4z & = & 18 \\\\
                    5y+2x & = & z+12 \\\\
                    4x-z & = & 6 \\\\
                \end{matrix}',
                'Sistem persamaan linear tiga variabel merupakan persempitan dari sistem persamaan linear dua variabel',
                'Pensil = 1 buah |
                    Pulpen = 1 buah |
                    Buku = 1 buah',
                'Samsul membeli 2 buah hp samsudin, sekalian membeli 5 buah micro sd 64 gb, ditambah dengan 4 buah soft case hp samsudin',
                '\begin{matrix}
                    3q+3r+3s & = & Rp. 10,500 \\\\
                    4r & = & Rp. 16,000 \\\\
                    q+2r & = & Rp. 12,500 \\\\
                \end{matrix}',
                'Himpunan dua persamaan linear yang terdiri dari dua variabel',
                '\(ax + by + cz = d\)',
                'Ya, selalu ada solusi',
                'Tidak ada',
                'Satu variabel',
            ],
            'pilihan_b' => [
                '\begin{matrix}
                    2r-s & = & 2 \\\\
                    2r+s & = & 6 \\\\
                    3r+s & = & 6+t \\\\
                \end{matrix}',
                'Hanya boleh terdiri dari variabel x, y, dan z',
                '1 buah pensil = x | 1 buah pulpen = y | 1 buah buku = z',
                'Ujang membeli 5 buah roti, lalu membeli 4 buah snack, lalu membeli lagi 2 buah snack',
                '\begin{matrix}
                    a+2b & = & Rp. 10,500 \\\\
                    4b & = & Rp. 16,000 \\\\
                    a+b+b & = & Rp. 12,500 \\\\
                \end{matrix}',
                'Himpunan tiga persamaan linear yang terdiri dari tiga variabel',
                '\(x + y + z = 3\)',
                'Tidak, tidak ada solusi',
                'Banyak tak hingga',
                'Dua variabel',
            ],
            'pilihan_c' => [
                '\begin{matrix}
                    4a & = & 10+b \\\\
                    a+b & = & 5 \\\\
                    3a & = & 2b+b+3 \\\\
                \end{matrix}',
                'Terdapat tiga variabel dan dua persamaan',
                'Pensil = Rp | Pulpen = Rp | Buku = RP',
                'Bambang membeli 5 sepatu air jordan, 4 buah kaos kaki, dan 2 buah tali sepatu tambahan',
                '\begin{matrix}
                    q+2r & = & Rp. 10,500+s \\\\
                    4r & = & Rp. 16,000 \\\\
                    q+r+s & = & Rp. 12,500 \\\\
                \end{matrix}',
                'Himpunan empat persamaan linear yang terdiri dari tiga variabel',
                '\(x + 2y + 3z = 7\)',
                'Terdapat banyak solusi yang mungkin',
                'Ada satu',
                'Tiga variabel'
            ],
            'pilihan_d' => [
                '\begin{matrix}
                    2x+3y+z & = & 8 \\\\
                    x+y+2z & = & 5 \\\\
                    2x-y-4z & = & -1 \\\\
                \end{matrix}',
                'Terdapat tiga variabel dan tiga persamaan',
                '1 buah pensil = a | 2 buah puplen = b | 1 buah buku = c',
                'Ujang membeli 4 buah roti, sedangkan Burhan membeli 5 buah roti, dan Samsul membeli 2 buah roti',
                '\begin{matrix}
                    q+2r & = & Rp. 10,500 \\\\
                    4r & = & Rp. 16,000 \\\\
                    q+r+s & = & Rp. 12,500 \\\\
                \end{matrix}',
                'Himpunan tiga persamaan linear yang terdiri dari dua variabel',
                '\(2x - y + 3z = 6\)',
                ' Solusi hanya ada jika koefisien matriks konsisten',
                'Tergantung pada nilai koefisien matriks',
                'Empat variabel'
            ],
            'pilihan_e' => [
                '\begin{matrix}
                    2x+z & = & 8-3y \\\\
                    y+2z & = & 5-x \\\\
                    2x & = & y+4z-1 \\\\
                \end{matrix}',
                'Pasangan berurutan x dan y disebut penyelesaian dari sistem persamaan',
                '1 buah pensil = Rp. 10,500 | 1 buah pulpen = Rp. 16,000 | 1 buah buku = Rp. 12,500',
                'Bambang membeli 4 sepatu air jordan, 5 kaos kaki, dan 2 buah tali sepatu tambahan',
                '\begin{matrix}
                    q+2r & = & Rp. 10,500 \\\\
                    4r & = & Rp. 16,000 \\\\
                    3q+3r+3s & = & Rp. 12,500 \\\\
                \end{matrix}',
                'Himpunan empat persamaan linear yang terdiri dari empat variabel',
                '\(x + y + z + t = 4\)',
                'Solusi hanya ada jika koefisien matriks tidak konsisten',
                'Tergantung pada bentuk persamaan',
                'Lima variabel',
            ],
            'jawaban' => [
                'c',
                'd',
                'b',
                'e',
                'd',
                'b',
                'a',
                'b',
                'a',
                'c',
            ]
         ]);
        $i = 0;
        while ($i < 10) {
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
