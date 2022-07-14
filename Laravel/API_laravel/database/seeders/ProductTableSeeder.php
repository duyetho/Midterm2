<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker::create();
        $limit = 10;
        for ($i = 0; $i < $limit; $i++){
            DB::table('foods')->insert([
                'name' =>$this->fake->name(),
                'image' =>$this->faker->img(),                
                'description' =>$this->faker->paragraph(6),
                'price'=>$this->faker->numberBetween(100000,2000000),
                'oldprice'=>$this->faker->numberBetween(100000,2000000),

            ]);
        }
    }
}
