<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('customers')->insert([
        //     'name' => Str::random(10),
        //     'email' => Str::random(10).'@example.com',
        //     'password' => Hash::make('password'),
        //     "dob"=>"2000-01-10",
        //     "mobile"=>"9890980099",
        //     "gender"=>"m",
        //     "address"=>Str::random(20),
        //     "status"=>1
        // ]);

        $faker = Factory::create();
        for($i=1;$i<=50;$i++){
            DB::table('customers')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' =>  $faker->password,
                "dob"=>"2000-01-10",
                "mobile"=>"9089098765",
                "gender"=>"m",
                "address"=>$faker->text,
                "status"=>1
            ]);
        }
      
    }
}
