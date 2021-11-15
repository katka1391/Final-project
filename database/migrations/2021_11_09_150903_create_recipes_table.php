<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();;
            $table->text('description')->nullable();;
            $table->integer('preptime')->nullable();;
            $table->string('difficulty')->nullable();;
            $table->integer('cooktime')->nullable();;
            $table->integer('servings')->nullable();;
            $table->integer('calories')->nullable();;
            $table->integer('fat')->nullable();;
            $table->integer('satfat')->nullable();;
            $table->integer('carbs')->nullable();;
            $table->integer('fiber')->nullable();;
            $table->integer('sugar')->nullable();;
            $table->integer('protein')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
