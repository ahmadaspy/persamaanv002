<?php

namespace Database\Seeders;

use App\Models\kkm;
use Illuminate\Database\Seeder;

class KkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kkm::insert([
            'kuis_1_kkm' => '80',
            'kuis_2_kkm' => '80',
            'evaluasi_kkm' => '80',
        ]);
    }
}
