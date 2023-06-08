<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use App\Models\languages;
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

        $languages = [
            ['name' => 'English'],
            ['name' => 'Francais'],
            ['name' => 'Arabic'],
        ];

        languages::insert($languages);
    }
}
