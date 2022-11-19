<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get all the roles from the database
        $users = User::all();
        $pivots = [];
        
        foreach ($users as $user){
            $pivots[] = [
                'user_id' => $user->id,
                'role_id' => Role::all()->random()->id//intval($roles->random(1)->pluck('id'))
            ];
        } 

        DB::table('user_roles')->insert($pivots);

        //Loop through the users from the database and attach them to their
        //specific roles
        // User::all()->each(function ($user) use ($roles){
        //     $user->roles()->attach(
        //         $roles->random(1)->pluck('id')
        //     );
        // });
    }
}
