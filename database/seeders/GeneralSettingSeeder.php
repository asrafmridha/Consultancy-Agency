<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneralSetting;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'company_name' => 'Jinjarsoft',
            'email' => 'info@jinjarsoft.com',
            'alter_email' => 'info@jinjarsoft.com',
            'phone' => '+01793578199',
            'alter_phone' => '+01793578199',
            'address' => '193, Motijheel Dhaka, Bangladesh',
            'logo' => 'logo.png',
            'favicon' => 'favicon.png',
            'meta_title' => 'Lorem ipsum dolor, sit amet consectetur',
            'meta_description' => 'Lorem ipsum dolor, sit amet consectetur',
            'meta_keywords' => 'Lorem ipsum dolor, sit amet consectetur',
            'copyright_text' => 'Copyright © 2023. Designed & Developed by',
            'location_image' => '<i class="pe-7s-map-marker"></i>',
            'phone_image' => '<i class="ti-mobile"></i>',
            'email_image' => '<i class="ti-email"></i>',
            'watch_image' => '<i class="ti-time"></i>',
            'open_day' => 'Mon-Fri',
            'open_day_time' => '10:00 am - 7.00 pm ',
            'close_day' => 'Saturday & Sunday',
            'about_description' => 'J'

        ]);
    }
}
