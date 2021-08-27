<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('typeformations')->insert([
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],
            [
                "nom"=>$faker->firstName,
            ],

        ]);
    }
}
