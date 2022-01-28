<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\User;
use App\Models\KodeKelas;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $kode_kelas = KodeKelas::all();
        $koleksi = collect();
        foreach ($kode_kelas as $kode) {
            $koleksi->push($kode->id);
        }
        $role = collect(['guru', 'siswa']);
        $email = $this->faker->unique()->safeEmail();
        return [
            $user = User::create([
                'name' => $this->faker->name(),
                'email' => $email,
                'email_verified_at' => now(),
                'kode_kelas_id' => $koleksi->random(),
                'password' => Hash::make($email), // password
                'remember_token' => Str::random(10),
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now(),
            ]),
            $user->attachRole($role->random()),
        ];
        // ============ default user factory ==============
        // return [
        //     'name' => $this->faker->name(),
        //     'email' => $this->faker->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}