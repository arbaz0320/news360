<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2020_11_24_073032_create_events_table.php
class CreateEventsTable extends Migration
=======
class CreateCategoriesTable extends Migration
>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103:database/migrations/2020_11_27_060634_create_categories_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2020_11_24_073032_create_events_table.php
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('author');
=======
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103:database/migrations/2020_11_27_060634_create_categories_table.php
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
<<<<<<< HEAD:database/migrations/2020_11_24_073032_create_events_table.php
        Schema::dropIfExists('events');
=======
        Schema::dropIfExists('categories');
>>>>>>> 43d324ef1f119a7d6d21edf33d1cd35f2bcdf103:database/migrations/2020_11_27_060634_create_categories_table.php
    }
}
