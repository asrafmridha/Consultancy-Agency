<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Title::create([

            'banner_title' => 'Expert Consultancy Agency',
            'service_title'=> 'Our Services',
            'service_heading' => 'WHAT WE DO',
            'service2_title' => 'Service',
            'service2_heading' => 'CUSTOMER SUPPORT CONSULTING',
            'case_studies_title' =>'Case Studies',
            'case_studies_heading' =>'OUR RECENT WORKS',
            'testimonials_title' =>'Testimonial',
            'testimonials_heading'=>'OUR CLIENTS FEEDBACK',
            'team_title' => 'Our Team',
            'team_heading'=> 'EXPERT CONSULTANTS',
            'contact_title' =>'contact',
            'contact_heading'=>'SEND US A QUICK MESSAGE',
        ]);
    }
}
