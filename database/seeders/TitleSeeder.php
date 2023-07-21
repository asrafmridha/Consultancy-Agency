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

            'banner_title' => '',
            'service_title' => 'Our Services',
            'service_heading' => 'WHAT WE DO',
            'service2_title' => 'Service',
            'service2_heading' => 'CUSTOMER SUPPORT CONSULTING',
            'case_studies_title' => 'Case Studies',
            'case_studies_heading' => 'OUR RECENT WORKS',
            'testimonials_title' => 'Testimonial',
            'testimonials_heading' => 'OUR CLIENTS FEEDBACK',
            'team_title'        => 'Our Team',
            'team_heading'      => 'EXPERT CONSULTANTS',
            'contact_title'     => 'contact',
            'contact_heading'   => 'SEND US A QUICK MESSAGE',
            'client_title'      => "our clients",
            'client_heading'    => 'CUSTOMERS WHO TRUST US',
            'success_area_title' => 'Statistics',
            'success_area_heading' => 'OUR SUCCESSES ARE COUNTING',
            'mail_title'          => 'E-mail',
            'mail_heading'        => 'Contact Through E-Mail',
            'phone_title'         => 'Phone',
            'phone_heading'       => 'Contact Via Call',
            'location_title'      => 'Location',
            'location_heading'    => 'Our Address',

        ]);
    }
}
