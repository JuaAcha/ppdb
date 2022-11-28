<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ilham',
            'email' => 'adminppdb@gmail.com', 
            'password' => bcrypt('ilhamskurt'),
            'remember_token' => Str::random(20)
        ]);
    }
}