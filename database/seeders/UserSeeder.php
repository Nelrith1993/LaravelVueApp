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
        //creamos los usuarios y les asignamos los roles en cuestión.
        
        $admin = User::create([
            'name' => 'admin',
            'email' => 'arequeijo.smr@gmail.com',
            'password' => Hash::make('admin')
        ]);
        $admin->assignRole('admin');

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('editor')
        ]);
        $editor->assignRole('editor');
    }
}
