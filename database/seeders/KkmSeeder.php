<?php

namespace Database\Seeders;

use App\Models\kkm;
use App\Models\KodeKelas;
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
        $kode_kelas = KodeKelas::all();
        $i = 1;
        foreach($kode_kelas as $kelas){
            kkm::insert([
                'kode_kelas_id' => $kelas->id,
                'kuis_mengenal_kkm' => '80',
                'kuis_1_kkm' => '80',
                'kuis_2_kkm' => '80',
                'evaluasi_kkm' => '80',
            ]);
        }

    }
}
