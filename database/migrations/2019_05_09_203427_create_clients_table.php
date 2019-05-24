<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
				$table->integer('street_id')->unsigned();
				$table->string('name', 150);
				$table->string('address');
				$table->string('postcode', 16);
				$table->string('phone', 16);
				$table->string('cel',16);
				$table->string('email')->unique();
				$table->string('image');
				$table->boolean('active')->default(0);
				$table->boolean('featured')->default(0);
				$table->string('description');
				$table->string('map');
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
        Schema::dropIfExists('clients');
    }
}
