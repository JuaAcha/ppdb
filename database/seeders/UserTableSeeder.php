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
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@ppdb.com',
            'password' => bcrypt('ilhamskuy'),
            'remember_token' => Str::random(20),
            'status' => 'active'
        ]);

        // DB::table('users')->insert([
        //     'role_id' => 2,
        //     'name' => 'iruhamukun',
        //     'email' => 'ilham@gmail.com',
        //     'password' => bcrypt('hooh'),
        //     'remember_token' => Str::random(20),
        //     'status' => 'inactive'
        // ]);
    }
}
