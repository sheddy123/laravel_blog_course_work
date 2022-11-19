<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'role_name' => 'Administrator',
            'role_description' => 'Shares users responsibilities'
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Author',
            'role_description' => 'Post articles and comments'
        ]);
        DB::table('roles')->insert([
            'role_name' => 'Member',
            'role_description' => 'Comments on articles'
        ]);
    }
}
