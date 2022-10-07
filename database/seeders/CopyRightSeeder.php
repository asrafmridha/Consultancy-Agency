<?php

namespace Database\Seeders;

use App\Models\CopyRight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CopyRightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CopyRight::create([
            'copy_right_year'=>'2021. All rights reserved by',
            'copy_right_text'=>'SoClose',
        ]);
    }
}
