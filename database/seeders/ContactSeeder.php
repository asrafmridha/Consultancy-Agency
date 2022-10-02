<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'email_font'      => ' <i class="flaticon-envelope"></i>',
            'email'           => ' consultancyagency@consult.com',
            'alter_email'     => ' consult@consultancyagency.com',
            'phone_font'      => ' <i class="flaticon-call"></i>',
            'phone'           => '(539) 123-586-2145',
            'alter_phone'     => '(880) 1234 586 987',
            'address_font'    => '<i class="flaticon-placeholder"></i>',
            'address'         => '1234, Parkstreet avenue NewYork City, America',
        ]);
    }
}
