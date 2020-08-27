<?php

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UserSeeder::class);
        $this->call(FoodSeeder::class);
        $this->call(IngredientSeeder::class);
        $this->call(FavoriteSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
