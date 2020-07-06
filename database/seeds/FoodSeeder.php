<?php

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class FoodSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->file = ['/database/seeds/*.csv'];
      // $this->worksheetTableMapping = ['Sheet1' => 'food'];
      parent::run();
    }
}
