<?php

namespace Database\Seeders;

use App\Models\SocialUrl;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialUrlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialUrl::create([
            'fb_url'      =>'#',
            'twitter_url' =>'#',
            'pinterest_url'=>'#',
            'linkedin_url'  =>'#',
            'created_at' => Carbon::now(),

        ]);
    }
}
