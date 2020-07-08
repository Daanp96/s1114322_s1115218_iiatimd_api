<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("image");
            $table->string("subclass");
            $table->text("description");
            $table->float("hp");
            $table->float("hp_backed");
            $table->float("hp_cooked");
            $table->string("effect_cooked");
            $table->integer("quality_lvl");
            $table->integer("potential");
            $table->longtext("duration_bonus_cooked");
            $table->longtext("food_recipe");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient');
    }
}
