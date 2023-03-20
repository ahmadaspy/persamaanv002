<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\KodeKelas;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kode_kelas = KodeKelas::all();
        $koleksi = collect();
        foreach ($kode_kelas as $kode) {
            $koleksi->push($kode->id);
        }
        $this->faker = Faker::create();
        $role = collect(['guru', 'siswa']);

        $i = 0;
        while ($i < 10) {
            $email = $this->faker->unique()->safeEmail();
            $user = User::create([
                'name' => $this->faker->name(),
                'email' => $email,
                'nip_nis' => $this->faker->unique()->numberBetween($min = 0, $max = 9000),
                'email_verified_at' => now(),
                'kode_kelas_id' => $koleksi->random(),
                'password' => Hash::make($email), // password
                'remember_token' => Str::random(10),
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]);
            $user->attachRole($role->random());
            $i++;
        }
    }
}
