<?php

use Illuminate\Database\Seeder;

class FavoriteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('favorite')->insert([
            'user_id' => 1,
            'food_id' => 27,
        ]);

      DB::table('favorite')->insert([
            'user_id' => 1,
            'food_id' => 29,
        ]);
    }
}
