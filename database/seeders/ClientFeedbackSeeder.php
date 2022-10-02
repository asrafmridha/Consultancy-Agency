<?php

namespace Database\Seeders;

use App\Models\ClientFeedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClientFeedback::create([

            'image'             => 'foo.jpg',
            'short_description' => 'loremdsfdsdsfdsfdsfsd',
            'client_name'      =>  'Asraf',
            'designation'      =>  'Engineer',
             'star'            =>  5,



        ]);
    }
}
