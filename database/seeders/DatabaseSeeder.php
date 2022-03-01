<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \App\Models\MariMencobaSpltvGabungan::factory(5)->create();
        \App\Models\MariMencobaSpltvSubtitusi::factory(5)->create();
        \App\Models\MariMencobaSpltvEliminasi::factory(5)->create();
        \App\Models\KodeKelas::factory(5)->create();
        $this->call(LaratrustSeeder::class);
        \App\Models\User::factory(10)->create();
    }
}
