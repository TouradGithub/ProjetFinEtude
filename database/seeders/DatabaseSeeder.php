<?php

namespace Database\Seeders;

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
        $user=new User();
        $user->email="admin@gmail.com";
        $user->name="admin";
        $user->is_admin=1;
        $user->password= Hash::make("admin");
        $user->save();
    }
}
