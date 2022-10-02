<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
         'icon'             =>'<i class="flaticon-stats position-relative"></i>',
        'title'             => 'Consult is the local lead',
        'Short_description' => 'Consult is the local leader in the
         Payment & Transaction System',
        'button_text'       =>  'Read More',
        'short_description2'=>  'ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',

        'advise'            =>  'Dont try to tell the customer what he wants. If you want to be smart, be smart in the shower. Then get out, go to work and serve the customer!',
        'advisor_name'      =>'Gene Buckley',
        'heading'           =>'WHY IS CUSTOMER SERVICE IS IMPORTANT?',
        'point'             => 'Going above and beyond for customers is what separates companies that thrive from companies that only survive.
        It generates not just repeat business but also referral business.
        ',
        'image' =>'foo.jpg',
        ]);





    }
}
