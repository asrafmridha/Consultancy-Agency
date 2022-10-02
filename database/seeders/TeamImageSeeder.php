<?php

namespace Database\Seeders;

use App\Models\TeamImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamImage::create([

            'image'         => 'foo.jpg',
            'name'          => 'asraf',
            'designation'   =>  'Engineer',
            'fb_link'       =>  'asrafmridha',
            'twitter_link'  => 'Asraf',
            'linkedin_link' => 'Asraf',
            'pinterest_link'=>  'Asraf',
            ]);
    
    }
}
