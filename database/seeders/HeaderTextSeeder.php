<?php

namespace Database\Seeders;

use App\Models\HeaderText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeaderTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderText::create([

            'title'             => 'WE MAKE YOUR BUSINESS BETTER',
            'Short_description' => 'Consult is the local leader in the rapidly evolving arena of Electronic
             Payment & Transaction System',
             'button_text'      =>  '#',



        ]);
    }
}
