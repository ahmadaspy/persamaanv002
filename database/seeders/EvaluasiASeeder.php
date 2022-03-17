<?php

namespace Database\Seeders;

use App\Models\EvaluasiA;
use Illuminate\Database\Seeder;

class EvaluasiASeeder extends Seeder
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
                '\(2x+y+3z=8\)',
                '\(x+2z=6\)',
                '\(x+3y+2z=-25\)',
                '\(x+3y+z=5\)',
                '\(x+y+z=6\)',
                'Jika tukang parkir mendapatkan uang sebesar Rp. 13.000 untuk 2 buah mobil, 1 motor dan 1 sepeda. Sedangkan untuk 4 motor dan 2 sepda tukang parkir mendapatkan uang sebesar Rp. 10.000. dan untuk 4 mobil, 4 motor dan 2 sepeda paman parkir mendapatkan Rp. 30.000. berapakah paman parkir mendapatkan uang apabila ada 20 mobil dan 35 motor dalam sehari ?',
                'Anang mempunyai toko kelontong yang menjual campuran beras A, beras B dan Beras C yang dijual sebagai berikut. Campuran 2 kg beras A, 1 kg beras B dan 1 kg beras C di jual seharga Rp. 15.000. Campuran 1 kg beras A, 2 kg beras B dan 2 kg beras C di jual seharga Rp. 18.000. Campuran 4 kg beras A, 2 kg beras  dan 3 kg beras C di jual seharga Rp. 35.000. Hitunglah harga tiap kg beras A, B dan C !',
                'Jumlah uang Bambang, Burhan dan Budi adalah Rp. 150.000. jika uang Bambang dan Burhan adalah Rp. 250.000 dikurangi dua kali uang Budi. Sedangkan apabila uang Bambang dan Budi akan menghasilkan Rp. 30.000 lebih dari tiga kali uang Burhan. Berapakah uang Bambang dan Burhan ?',
                'Ucup beserta 2 temannya pergi ke toko buku. Ucup membeli 3 buku tulis, 2 buah pulpen dan 1 buah pensil seharga Rp. 41.000. burhan membeli 1 buku tulis, 2 pulpen dan 4 pensil seharga Rp. 25.000. bambang membeli 2 buku tulis, 3 pulpen dan 1 buah pensil seharga Rp. 33.000. berapakah harga buku tulis, pulpen dan pensil ?',
                'Diketahui sebuah bilangan tiga angka. Jumlah angka – angka tersebut adalah 12. Angka pertama ditambah angka kedua menghasilkan angka ketiga. Dua kali angka pertama di tambah angka kedua menghasilkan 16 di kurang angka ketiga. Berapakah hasil angka kedua di kurang angka ketiga ?'
            ],
            'soal_2' => [
                '\(x-3y-2z=4\)',
                '\(3x+2y+z=32\)',
                '\(3x-2y+5z=-7\)',
                '\(4x-2y-2z=4\)',
                '\(3x-y-2z=5\)',
                null,
                null,
                null,
                null,
                null,
            ],
            'soal_3' => [
                '\(2x+2y+z=2\)',
                '\(2x+y+z=20\)',
                '\(2x+y-3z=-6\)',
                '\(x-y-4z=7\)',
                '\(2x+3y-z=4\)',
                null,
                null,
                null,
                null,
                null,
            ],
            'pertanyaan' => [
                'Berapakah nilai x dan y ?',
                'Berapakah nilai y+z ?',
                'Berapakah nilai z ?',
                'Berapakah nilai x+y-z ?',
                'Berapakah nilai x-y-z ?',
                null,
                null,
                null,
                null,
                null,
            ],
            'pilihan_a' => [
                '\((-3,2)\)',
                '\(0\)',
                '\(-1\)',
                '\(7\)',
                '\(2\)',
                '\(Rp. 170.000\)',
                '\((7.000,5.000,6.000)\)',
                '46.000 dan 80.000',
                '6.500, 3.000 dan 7.000',
                '\(-4\)',
            ],
            'pilihan_b' => [
                '\((2,-2)\)',
                '\(-1\)',
                '\(2\)',
                '\(3\)',
                '\(-2\)',
                '\(Rp. 214.000\)',
                '\((7.700,6.500,5.900)\)',
                '30.000 dan 60.000',
                '2.900, 10.000 dan 5.000',
                '\(-5\)',
            ],
            'pilihan_c' => [
                '\((-1,4)\)',
                '\(3\)',
                '\(3\)',
                '\(1\)',
                '\(-1\)',
                '\(Rp. 134.000\)',
                '\((4.000,2.000,5.000)\)',
                '23.000 dan 10.000',
                '8.200, 1.000 dan 3.400',
                '\(7\)',
            ],
            'pilihan_d' => [
                '\((1,-3)\)',
                '\(6\)',
                '\(-4\)',
                '\(5\)',
                '\(-5\)',
                '\(Rp. 191.000\)',
                '\((3.000,2.300,4.000)\)',
                '23.000 dan 21.000',
                '11.000, 3.000 dan 2.000',
                '\(-3\)',
            ],
            'pilihan_e' => [
                '\((3,-4)\)',
                '\(5\)',
                '\(-2\)',
                '\(0\)',
                '\(4\)',
                '\(Rp. 192.000\)',
                '\((2.000,7.000,6.900)\)',
                '20.000 dan 30.000',
                '9.000, 2.600 dan 1.300',
                '\(0\)',
            ],
            'jawaban' => [
                'b',
                'a',
                'e',
                'd',
                'a',
                'a',
                'c',
                'e',
                'd',
                'a',
            ],
        ]);
        $i = 0;
        while ($i < 10) {
            EvaluasiA::insert([
                'soal_1' => $soal_colect['soal_1'][$i],
                'soal_2' => $soal_colect['soal_2'][$i],
                'soal_3' => $soal_colect['soal_3'][$i],
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
