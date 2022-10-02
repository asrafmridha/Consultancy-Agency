<?php

namespace Database\Seeders;

use App\Models\RecentWork;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecentWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RecentWork::create([
            'image'  =>  'foo.jpg',
            'title'  => 'Customer Support',
            'short_description' =>'Buisness and Finance',
            
        ]);
    }
}
