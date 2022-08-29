<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('admin'),
        ])->assignRole('admin','nurse','maternity');
        User::create([
            'name'=>'sklad',
            'email'=>'hamshira@gmail.com',
            'password'=> Hash::make('hamshira'),
        ])->assignRole('nurse');
    }
}
