<?php

namespace Database\Seeders;

use App\Models\Parents;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParentAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Orang Tua',
            'email' => 'orangtua@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'role' => 'Parent',
            'foto' => 'parent.jpg',
        ]);

        Parents::create([
            'nama_lengkap' => 'Orang Tua',
            'kode' => 'OT12311232',
            'user_id' => 1,
        ]);
    }
}
