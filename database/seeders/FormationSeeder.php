<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('formations')->insert([
            [
                "nom"=>$faker->firstName,
                "description"=>"disponible"
            ],
            [
                "nom"=>$faker->firstName,
                "description"=>"disponible"
            ],
            [
                "nom"=>$faker->firstName,
                "description"=>"disponible"
            ],
            [
                "nom"=>$faker->firstName,
                "description"=>"disponible"
            ],
            [
                "nom"=>$faker->firstName,
                "description"=>"disponible"
            ],
            [
                "nom"=>$faker->firstName,
                "description"=>"disponible"
            ],
        ]);
    }
}
