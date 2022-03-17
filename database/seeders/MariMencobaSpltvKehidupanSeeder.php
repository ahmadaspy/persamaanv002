<?php

namespace Database\Seeders;

use App\Models\MariMencobaSpltvKehidupan;
use Illuminate\Database\Seeder;

class MariMencobaSpltvKehidupanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MariMencobaSpltvKehidupan::insert([
            'soal_1' => 'Bambang the masculin adalah seorang turis dari australia yang berkunjung ke banjarmasin dengan dua temannya salem shady dan stewart dickinson. Mereka dalam 3 hari berturut memakai transportasi klotok. Hari pertama dari dermaga mereka berangkat ke pasar apung lalu mereka ke musemum wasaka dan balik ke pasar apung lagi dengan pengeluaran tiket transportasi sebesar Rp. 75.000. hari kedua mereka berangkat lagi dari dermaga ke pulau bekantan dan ke pasar apung dengan pengeluaran tiket transportasi sebesar Rp.80.000. hari terakhir mereka mengunjungi semua dari pasar apung, pulau bekantan dan museum wasaka dengan total pengeluaran transportasi sebesar Rp.95.000. berapakah harga tiket transportasi klotok dari masing – masing destinasi ?',
            'pertanyaan_soal' => 'berapakah harga tiket transportasi klotok dari masing – masing destinasi ?',
            'jawaban_1' => '30000',
            'jawaban_2' => '15000',
            'jawaban_3' => '50000',
            'penjelasan_1' => 'Kita \\ misalkan \\ tiket \\ destinasi : \\\\ pasar \\ apung=x \\\\ museum \\ wasaka=y \\\\ pulau \\ bekantan=z',
            'penjelasan_2' => 'Dari \\ deskripsi \\ yang \\ dijelaskan \\ kita \\ simpulkan \\ hari \\ pertama \\ sampai \\ hari \\ ketiga \\ memiliki \\ persamaan : \\\\ 2x+y=75.000 \\\\ x+z=80.000 \\\\ x+y+z=95.000',
            'penjelasan_3' => 'Subtitusi \\ atau \\ eliminasi \\ persamaan \\ di \\ atas. \\\\ x+z=80.000 \\\\ x=80.000-z \\\\ Subtitusikan \\ nilai \\ x \\\\ 2x+y=75.000 \\\\ 2(80.000-z)+y=75.000 \\\\ 160.000-2z+y=75.000 \\\\ -2z+y=75.000-160.000 \\\\ -2z+y=-85.000',
            'penjelasan_4' => 'Subtitusikan \\ ke \\ persamaan \\ (3) \\\\ x+y+y=95,000 \\\\ (80.000-z)+y+z=95.000 \\\\ 80.000+y=95.000 \\\\ y=95.000-80.000 \\\\ y=15.000 \\\\ Subtitusikan \\ nilai \\ y \\ ke \\ dalam \\ persamaan \\ linear \\ dua \\ variabel \\\\ -2z+y=-85.000 \\\\ -2z+(15.000)=-85.000 \\\\ -2z=-85.000-15.000 \\\\ -2z=-100.000 \\\\ z=50.000',
            'penjelasan_5' => 'Subtitusikan \\ nilai \\ yang \\ kita \\ dapatkan \\ di \\ atas \\ ke \\ dalam \\ persamaan \\ semula. \\\\ x+y+z=95.000 \\\\ x+(15.000)+(50.000)=95.000 \\\\ x+65.000=95.000 \\\\ x=30.000',
        ]);
    }
}
