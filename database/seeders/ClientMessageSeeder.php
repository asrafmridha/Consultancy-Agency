<?php

namespace Database\Seeders;

use App\Models\CustomerMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomerMessage::create([

            'customer_name'     => 'Asraf',
            'customer_email'    => 'asrafmridha@gmail.com',
            'customer_message'  =>  'Its Good',
        ]);
    }
}
