<?php

namespace Database\Seeders;

use App\Models\Mentor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MentorAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mentor',
            'email' => 'mentor@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'Mentor',
            'foto' => 'mentor.jpg',
        ]);

        Mentor::create([
            'nama_lengkap' => 'Mentor',
            'gelar' => 'S.Kom, M.Kom',
            'riwayat_pendidikan_terakhir' => 'S1 Ilmu Komputer',
            'user_id' => 2,
        ]);
    }
}
