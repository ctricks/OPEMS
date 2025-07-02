<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bok Bok',
            'role' => 'Admin',
            'email' => 'bok@mail.com',
            'password' => bcrypt('admin123'),
            'image' => null,
        ]);
    }
}
