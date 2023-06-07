<?php

namespace Database\Seeders;

use App\Models\KuisMengenal;
use Illuminate\Database\Seeder;
use Database\Seeders\KuisMengenalSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\MariMencobaSpldvGabungan::factory(5)->create();
        // \App\Models\MariMencobaSpldvElminasi::factory(5)->create();
        // \App\Models\MariMencobaSpldvSubtitusi::factory(5)->create();
        // \App\Models\MariMencobaSPLDVGrafik::factory(5)->create();
        // \App\Models\MariMencobaSpltvGabungan::factory(5)->create();
        $this->call(MariMencobaSPLTVGabunganSeeder::class);
        // \App\Models\MariMencobaSpltvSubtitusi::factory(5)->create();
        $this->call(MariMencobaSPLTVSubtitusiSeeder::class);
        // \App\Models\MariMencobaSpltvEliminasi::factory(5)->create();
        $this->call(MariMencobaSPLTVEliminasiSeeder::class);
        \App\Models\KodeKelas::factory(1)->create(); //disable
        $this->call(KuisMengenalSeeder::class);
        $this->call(KuisPertamaSeeder::class);
        $this->call(KuisKeduaSeeder::class);
        $this->call(MariMencobaSpltvKehidupanSeeder::class);
        $this->call(LaratrustSeeder::class);
        $this->call(AdminSeeder::class);
        // $this->call(UserSeeder::class); //disable
        $this->call(EvaluasiASeeder::class);
        // $this->call(EvaluasiBSeeder::class);
        $this->call(KkmSeeder::class); //disable
        // \App\Models\User::factory(10)->create();
    }
}
