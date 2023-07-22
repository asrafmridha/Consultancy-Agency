<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CustomerTrust;
use App\Models\RecentWork;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $this->call([
            
            HeaderTextSeeder::class,
            ServiceSeeder::class,
            TeamImageSeeder::class,
            RecentWorkSeeder::class,
            ClientFeedbackSeeder::class,
            ProjectIdeaSeeder::class,
            ExperienceSeeder::class,
            ClientMessageSeeder::class,
            UserSeeder::class,
            ContactSeeder::class,
            TitleSeeder::class,
            OurserviceSeeder::class,
            CustomerTrustSeeder::class,
            TeamImageSeeder::class,
            FooterServiceSeeder::class,
            SocialUrlSeeder::class,
            RecentWorkButtonSeeder::class,
            CopyRightSeeder::class,
            ThemeSeeder::class,
            AllTableSeeder::class,
            GeneralSettingSeeder::class,

        ]);
    }
}
