<?php

namespace Database\Seeders;

use App\Models\footerservice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        footerservice::create([
            'financial'      =>'Financial Consultancy',
            'sale_service'   =>'Sales Service Consultancy', 
            'buisness'       =>'Business Strategy',
            'market_research'=>'User and Market Research',
            'customer_support'=>'Customer Support Consulting',
        ]);
    }
}
