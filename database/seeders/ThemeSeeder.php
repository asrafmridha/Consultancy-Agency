<?php

namespace Database\Seeders;

use App\Models\ThemeSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ThemeSetting::create([
            'user_id'=>1,
            'theme'=>'light-layout',
            'nav'=>'expanded',
        ]);
    }
}
