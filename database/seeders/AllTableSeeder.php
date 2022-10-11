<?php

namespace Database\Seeders;

use App\Models\AllTableName;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllTableName::create([
           "name"=>'Banner',
           'route'=>'headertextview', 
        ]);     
         AllTableName::create([
            "name"=>'Contact',
            'route'=>'contact.updateview'
        ]); AllTableName::create([
            "name"=>'Message',
            'route'=>'customer.message.show', 
        ]); AllTableName::create([
            "name"=>'Recent Work',
            'route'=>'admin.managerecentwork', 
        ]); AllTableName::create([
            "name"=>'Team',
            'route'=>'admin.teamview', 
        ]); AllTableName::create([
            "name"=>'Service',
            'route'=>'admin.servicetableview', 
        ]);
        
        AllTableName::create([
            "name"=>'Copyright',
            'route'=>'copyright.update.view'
        ]);
    }
}
