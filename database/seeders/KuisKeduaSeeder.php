<?php

namespace Database\Seeders;

use App\Models\KuisKedua;
use Illuminate\Database\Seeder;

class KuisKeduaSeeder extends Seeder
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
                'Apabila sebuah segitiga ABC mempunyai keliling 70 cm. Dengan panjang AB merupakan 20 cm kurangnya dari AC. Sedangkan panjang BC adalah 55 cm dikurangi panjang AC. Jika AB dinyatakan dengan x, BC dinyatakan dengan y, dan AC dinyatakan dengan z, maka berapakah nilai x+y ?',
                'Bambang adalah seorang anak orang kaya, dalam rangka ulang tahun dia membelikan sebuah game ke tiga temannya yaitu Ucup, Burhan dan Udin. Pada saat acara summer sale game, bambang mengeluarkan uang sebesar Rp. 521.650 untuk memberikan satu game Far cry 5 dan satu game Red dead redemption 2 kepada Ucup. Bambang mengeluarkan uang sebesar Rp. 218.849 untuk memberikan satu game Far cry 5 dan satu game Horizon zero dawn kepada Burhan. Sedangkan untuk Udin, Bambang mengeluarkan Rp. 554.799 untuk satu game Horizon zero dawn dan satu game Red dead redemption 2. Berapakah harga masing – masing dari game yang di beli Bambang ?',
                'Zainal, Bambang dan Ucup mempunyai merek motor yang sama. Zainal mempunyai 1 motor honda dan 2 motor yamaha dengan total harga dari motor tersebut 53 juta rupiah. Bambang mempunyai 3 motor yamaha, 1 motor honda dan 1 motor kawasaki dengan total harga motor tersebut 110 juta rupiah. Sedangkan ucup mempunyai 2 motor honda, 1 motor yamaha dan 1 motor kawasaki dengn total harga motor tersebut 91 juta rupiah. Apabila tipe motor di setiap merek yang mereka miliki sama, berapakah total harga dari ketiga motor tersebut ?',
                'Jika Subahan, Malik dan Zainal mereka mempunyai uang jajan bertotal dari ketiganya adalah sebesar Rp. 180.000. uang Subahan dan Malik jika digabung akan sebesar uang Zainal. Jika uang Malik dan Zainal di gabung maka nilainya akan sama dengan 2 kali uang Subahan. Berapah nilai masing – masing uang jajan mereka ?',
                'Ujang, Hairun dan Jamal berwisata ke daerah kalimantan selatan. Selama mereka liburan di kalimantan selatan mereka menyempatkan diri untuk berbelanja oleh – oleh. Ujang membeli 3 buah sasirangan, 1 tas purun dan 2 lampit rotan seharga Rp. 375.000. Hairun membeli 1 sasirangan dan 3 tas purun seharga Rp. 181.000. Sedangkan jamal membeli 4 buah sasirangan, 2 buah lampit rotan, dan 2 tas purun seharga Rp. 451.000. Berapakah total harga dari masing – masing barang yang disebutkan di atas ?',
                'Jika umur ayah, ibu dan kakak ditambahkan maka akan menghasilkan 100. Jika umur ibu dan kakak ditambah maka akan menghasilkan umur ayah. Sedangkan umur ayah ditambah umur kakak akan menghasilkan 40 ditambahkan dengan umur ibu. Berapakah umur ayah, ibu dan kakak  ?',
                'Ujang mempunyai sebuah tali berwarna yang berurutan yaitu tali biru, merah, dan kuning. Apabila semua tali tersebut disambung maka akan menghasilkan panjang tali 60cm, panjang tali merah jika disambung dengan tali kuning maka menghasilkan panjang tali biru, sedangkan panjang tali merah merupakan panjang tali kuning ditambah 10cm. Berapakah panjang masing – masing dari tali tersebut ?',
                'Di tempat sebuah bengkel terdapat beberapa unit mobil roda empat, motor roda tiga dan motor roda dua. Di tempat tersebut apabila semua roda dari unit di atas dijumlahkan akan menghasilkan 49 roda. Unit mobil dan motor roda dua berjumlah 15 unit. Jumlah unit motor roda dua adalah 2 kali jumlah unit mobil roda empat. Berpakah jumlah dari masing – masing unit tersebut ?',
                'Zainal hobi nonton film, pada suatu kesempatan dia menonton film dengan pacarnya dengan membeli dua buah tiket dan makanan seperti dua buah minuman di bioskop dengan total pengeluaran uang sebesar Rp. 90,000, pada kesempatan yang lain zainal hanya kepengen makan cemilan sehingga membeli satu buah minuman dan dua buah popcorn di bioskop dengan total pengeluaran uang sebesar Rp. 110,000. Kalau zainal lagi gajihan maka dia akan mentraktir empat orang temannya nonton film dan masing – masing mendapatkan popcorn dan minuman dengan total pengeluaran uang sebesar Rp. 380,000. Berapakah harga tiket, minuman dan popcorn di bioskop tersebut ?',
                'Suatu segita siku – siku abc memiliki keliling 30 cm, sisi c merupakan 28 cm dikurang tiga kali panjang b, panjang a adalah 25 cm kurang dari c. Berapakah panjang sisi miring segita tersebut ?',

            ],
            'pertanyaan_soal' => [
                'berapakah nilai x+y ',
                'Berapakah harga masing – masing dari game yang di beli Bambang ?',
                'berapakah total harga dari ketiga motor tersebut ?',
                'Berapah nilai masing – masing uang jajan mereka ?',
                'Berapakah total harga dari masing – masing barang yang disebutkan di atas ?',
                'Berapakah umur ayah, ibu dan kakak  ?',
                'Berapakah panjang masing – masing dari tali tersebut ?',
                'Berpakah jumlah dari masing – masing unit tersebut ?',
                'Berapakah harga tiket, minuman dan popcorn di bioskop tersebut ?',
                'Berapakah panjang sisi miring segita tersebut ?',
            ],
            'jawaban_1' => [
                '35',
                '92850',
                '74000000',
                '60000',
                '97000',
                '50',
                '30',
                '5',
                '35000',
                '13',
            ],
            'jawaban_2' => [
                null,
                '125999',
                null,
                '30000',
                null,
                '30',
                '20',
                '3',
                '10000',
                null,
            ],
            'jawaban_3' => [
                null,
                '428800',
                null,
                '90000',
                null,
                '20',
                '10',
                '10',
                '50000',
                null,
            ],

        ]);
        $i = 0;
        while ($i < 10) {
            KuisKedua::insert([
                'soal_1' => $soal_colect['soal_1'][$i],
                'pertanyaan_soal' => $soal_colect['pertanyaan_soal'][$i],
                'jawaban_1' => $soal_colect['jawaban_1'][$i],
                'jawaban_2' => $soal_colect['jawaban_2'][$i],
                'jawaban_3' => $soal_colect['jawaban_3'][$i],
            ]);
            $i++;
        }
    }
}
