<?php

namespace Database\Seeders;

use App\Models\EvaluasiB;
use Illuminate\Database\Seeder;

class EvaluasiBSeeder extends Seeder
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
                '\(3x+2y-4z=17\)',
                '\(a+2b+3c=-10\)',
                '\(2x+2y+5z=-15\)',
                '\(x-2y+z=-5\)',
                '\(3x+4y+4z=-1\)',
                'Toko permen menjual merk permen x, y dan z. Harga semua permen satu persatu kalau digabung adalah Rp. 3500. Harga satu lusin permen x sama dengan setengah lusin permen z. Harga dua buah permen y sama dengan permen x. Berapakah harga dari empat permen x, dua permen y dan dua permen z ?',
                'Ucup mempunyai toko buah yang menjual paketan buah yang dijual sebagai berikut. Paket A mempunyai 2 kg apel malang, 1 kg alpukat mentega dan 3 kg jeruk baby seharga Rp. 204.000. Paket B mempunyai 4 kg apel malang, 2 kg alpukat mentega dan 3 kg jeruk baby seharga Rp. 308.000. Paket C mempunyai 1 kg apel malang, 4 kg alpukat mentega dan 2 kg jeruk baby seharga Rp. 231.000. Hitunglah harga tiap kg dari masing – masing buah !',
                'Dengan suatu alasan tertentu, 3 siswa yaitu Bambang, Burhan dan Zainal mengukur berat badan mereka. Berat badan mereka bertiga 195 kg. Berat badan Bambang dan Burhan adalah 150 kg. Sedangkan berat badan Zainal dan Bambang adalah 105 kg. Berapakah berat masing – masing orang ?',
                'Dalam sebuah perusahaan percetakan baju (sablon baju). Ada tiga macam alat produksi yang berjalan secara bersamaan yaitu alat A, B, dan C. Dalam satu jam ketiga alat produksi tersebut bisa menyablon baju sebanyak 26 buah baju. Alat A dan C dapat menyablon baju sebanyak alat B dalam satu jam. Dan alat B dan C dapat menyablon baju sebanyak 19 buah baju dalam satu jam. Berapa banyak produksi sablon baju dari alat A, B, dan C  dalam satu jam ?',
                'Jika sebuah komputer menjual varian laptop yaitu laptop merek asur, asem, dan lehnono. Jika Ucup membeli ketiga barang tersebut maka ucup harus membayar sebesar Rp. 22.600.000. Jika Bambang membeli laptop sebanyak 2 buah merek asur, 3 buah merek asem, dan 1 buah merek lehnono maka Bambang harus mengeluarkan uang sebesar Rp. 45.600.000. Jika Zainal membeli laptop tersebut sebanyak 4 buah merek asur, 1 buah merek asem, dan 2 buah merek lehnono maka Zainal harus mengeluarkan uang sebanyak Rp. 51.200.000. berapa harga apabila Burhan membeli 10 buah merek asem dan 8 buah merek lehnono ?'
            ],
            'soal_2' => [
                '\(3y+2z=-19\)',
                '\(a+3b+c=11\)',
                '\(3x+y+z=18\)',
                '\(2x+4y-3z=1\)',
                '\(x+4y+z=-17\)',
                null,
                null,
                null,
                null,
                null,
            ],
            'soal_3' => [
                '\(-x+2z=-11\)',
                '\(3a-b+2c=-9\)',
                '\(x-5y-6z=15\)',
                '\(4x-3y+4z=-10\)',
                '\(2x+y+z=6\)',
                null,
                null,
                null,
                null,
                null,
            ],
            'pertanyaan' => [
                'Berapakah nilai dari y ?',
                'Berapakah nilai a-b+c ?',
                'Berapakah nilai dari x,y dan z ?',
                'Berapakah nilai 2x+3y-z ?',
                'Berapakah nilai z- y ?',
                null,
                null,
                null,
                null,
                null,

            ],
            'pilihan_a' => [
                '\(6\)',
                '\(1\)',
                '\({(6,9,-9)}\)',
                '\(-1\)',
                '\(-2\)',
                '\(9500\)',
                '\((16000,51000,42000)\)',
                '\((60,90,45)\)',
                '\((8,14,6)\)',
                '\(Rp. 142.000.000\)',
            ],
            'pilihan_b' => [
                '\(-3\)',
                '\(8\)',
                '\({(-12,-4,2)}\)',
                '\(-8\)',
                '\(2\)',
                '\(7000\)',
                '\((5000,59000,44000)\)',
                '\((50,69,59)\)',
                '\((7,15,8)\)',
                '\(Rp. 137.000.000\)',
            ],
            'pilihan_c' => [
                '\(-4\)',
                '\(-9\)',
                '\({(7,-12,8)}\)',
                '\(2\)',
                '\(-6\)',
                '\(14000\)',
                '\((92000,7000,36000)\)',
                '\((77,97,61)\)',
                '\((7,13,6)\)',
                '\(Rp. 140.800.000\)',
            ],
            'pilihan_d' => [
                '\(5\)',
                '\(-10\)',
                '\({(-1,9,-1)}\)',
                '\(1\)',
                '\(4\)',
                '\(9000\)',
                '\((55000,34000,20000)\)',
                '\((78,77,61)\)',
                '\((8,18,10)\)',
                '\(Rp. 121.000.000\)',
            ],
            'pilihan_e' => [
                '\(-5\)',
                '\(-2\)',
                '\({(20,-18,12)}\)',
                '\(3\)',
                '\(8\)',
                '\(10000\)',
                '\((91000,4000,79000)\)',
                '\((54,96,75)\)',
                '\((8,20,12)\)',
                '\(Rp. 120.200.000\)',
            ],
            'jawaban' => [
                'b',
                'c',
                'a',
                'd',
                'e',
                'd',
                'd',
                'a',
                'c',
                'c',
            ],
        ]);
        $i = 0;
        while ($i < 10) {
            EvaluasiB::insert([
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
