<?php

namespace Database\Seeders;

use App\Models\OurService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OurserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OurService::create([
        'image'            =>'foo.jpg',
        'short_description'=>'ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        'advise'           =>'Don’t try to tell the customer what he wants. If you want to be smart, be smart in the shower. Then get out, go to work and serve the customer!',
        'advisor_name'      =>'Gene Buckley',
        'heading'           => 'WHY IS CUSTOMER SERVICE IS IMPORTANT?',
        'point'             =>'It generates not just repeat business but also referral business.
        Once you have a lots of positive customer reviews, you can start reputation marketing.'  ,


        ]);
    }
}
