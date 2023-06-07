<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        $email = $this->faker->unique()->safeEmail();
        $user = User::create([
            'name' => $this->faker->name(),
            'email' => $email,
            'nip_nis' => null,
            'email_verified_at' => now(),
            'kode_kelas_id' => null,
            'password' => Hash::make($email), // password
            'remember_token' => Str::random(10),
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);
        $user->attachRole('admin');
    }
}
