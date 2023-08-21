<?php

namespace Database\Seeders;

use App\Models\Iframe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IframeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Iframe::create([
            'embed_link' => "dsfs",
        ]);
    }
}
