<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'admin',
            'alamat' => 'padang bulan',
            'telepon' => '085265334',
            'email' => 'admin@gmail.com',
            'password' =>Hash::make('admin@123'),
            'jenis' =>'admin'
        ]);
    }
}
