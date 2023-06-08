<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\languages;
class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [
            ['name' => 'English'],
            ['name' => 'Francais'],
            ['name' => 'Arabic'],
        ];

        languages::insert($languages);
    }
}
