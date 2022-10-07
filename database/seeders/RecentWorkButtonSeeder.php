<?php

namespace Database\Seeders;

use App\Models\RecentWorkButton;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecentWorkButtonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      RecentWorkButton::create([
        'buisness_finance'=>'Business & Finance',
        'customer_support'=>'Customer Support',
        'financial_service'=>'Financial Service',
        'buisness_stargey'=>'Business Strategy',
        'sale_service'  =>'Sales Service',
      ]);
    }
}
