<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'number'=> '12345678',
            'address'=> 'konohagakure',
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);
    }
}
