<?php

namespace Database\Seeders;

use App\Models\ProjectIdea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectIdeaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectIdea::create([

            'heading'             => 'HAVE ANY PROJECT ON MIND?',
            'title'             => "let's contact with our experts",
            'button_text'      =>  '/contact',



        ]);
    }
}
