<?php

namespace Database\Seeders;

use App\Models\alg_dish;
use App\Models\Allergen;
use App\Models\category;
use App\Models\Dish;
use App\Models\Ingredient;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $Allergens=[
            ["id"=>"1", "allergenName"=> "Gluten",],
            ["id"=>"2", "allergenName"=> "Crustaceans",],
            ["id"=>"3", "allergenName"=> "Egg",],
            ["id"=>"4", "allergenName"=> "Fish",],
            ["id"=>"5", "allergenName"=> "Peanut",],
            ["id"=>"6", "allergenName"=> "Soy",],
            ["id"=>"7", "allergenName"=> "Milk",],
            ["id"=>"8", "allergenName"=> "Treenuts",],
            ["id"=>"9", "allergenName"=> "Celery",],
            ["id"=>"10","allergenName"=> "Mustard",],
            ["id"=>"11", "allergenName"=> "Sesame",],
            ["id"=>"12", "allergenName"=> "Sulphur dioxide",],
            ["id"=>"13", "allergenName"=> "Lupin",],
            ["id"=>"14", "allergenName"=> "Molluscs",]
        ];
        foreach($Allergens as $a){
            Allergen::create($a);
        }
        $Categ = ['appetizer', 'soup', 'main dish', 'side dish', 'salad', 'dessert','pastry', 'other'];
        foreach ($Categ as $c){
            category::create(['categoryName'=> $c]);
        }



        $djson= File::get(database_path('data/dishes.json'));
        $dish = json_decode($djson, true);
        foreach ($dish as $d) {
            Dish::create($d);
        }
        $ijson= File::get(database_path('data/Dish_ings.json'));
        $ing = json_decode($ijson, true);
        foreach ($ing as $i) {
            Ingredient::create($i);
        }
        $ajson= File::get(database_path('data/alg_dishes.json'));
        $alg = json_decode($ajson, true);
        foreach ($alg as $a) {
            alg_dish::create($a);
        }

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
