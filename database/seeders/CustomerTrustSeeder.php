<?php

namespace Database\Seeders;

use App\Models\CustomerTrust;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       CustomerTrust::create([
       'image'=>'foo.jpg'
       ]);
    }
}
