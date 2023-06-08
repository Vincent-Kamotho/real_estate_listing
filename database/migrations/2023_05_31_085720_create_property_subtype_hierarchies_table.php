<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertySubtypeHierarchiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_subtype_hierarchies', function (Blueprint $table) {
            $table->id();
            $table->string('property_type');
            $table->string('property_subtype');
            $table->string('property_name');
            $table->string('property_price');
            $table->string('image')->nullable();
            $table->string('description');
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
        Schema::dropIfExists('property_subtype_hierarchies');
    }
}
