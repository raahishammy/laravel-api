<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("title", 255);
            $table->decimal("cost", 8,2);
            $table->decimal("price", 8,2)->nullable(true);
            $table->text("description")->nullable(true);
            $table->string("units", 255)->nullable(true); // Types depends on the requirement, then we can make it as enum type.
            $table->decimal("weight_per_unit", 8,2)->nullable(true);
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
        Schema::dropIfExists('products');
    }
};
