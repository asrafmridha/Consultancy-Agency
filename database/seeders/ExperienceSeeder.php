<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Experience::create([

            'years'         => 4,
            'heading'       => 'YEARS OF EXPERIENCES AS A',
            'title'         =>  'PROFESSIONAL CONSULTANCY
            AGENCY',
            'short_description' =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.',
            'first_image'   =>'foo1.jpg',
            'second_image'  =>'foo2.jpg',
            'side_image1'   =>'foo3.jpg',
            'side_image2'   =>'foo4.jpg',
            'side_image3'   =>'foo5.jpg',
            'side_image4'   =>'foo6.jpg',
            'heading2'      => 'Our Success Area Counting',
            'about_first_image'=>'foo7.jpg',
            'about_second_image'=>'foo8.jpg',
            'compelte_project'=>120,
            'satisfied_project'=>72,
            'ongoing_project' =>16,

        ]);
    }
}
