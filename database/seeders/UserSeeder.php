<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            'name' => 'Mohammed Alsarasra',
            'username'   => 'msarasra',
            'email'      => 'm@sarasra.ps',
            'password'   => Hash::make('123123'),
            'created_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
