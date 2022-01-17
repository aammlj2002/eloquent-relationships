<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Role::factory(10)->create();
        $roles=Role::all();
        User::all()->each(function ($user) use ($roles) {
            $user->roles()->saveMany($roles);
        });
        //store data
        // $user->name = "mgmg";
        // $user->save();
        // $user->roles()->attach($roles);
    }
}
