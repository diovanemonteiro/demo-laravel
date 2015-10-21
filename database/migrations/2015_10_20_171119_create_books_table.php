<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 50);
            $table->string('subtitle', 100)->nullable();
            $table->text('description');
            $table->string('author', 50);
            $table->unsignedBigInteger('isbn')->unique();
            $table->unsignedSmallInteger('pages');
            $table->unsignedSmallInteger('year');
            $table->string('publisher', 30);
            $table->string('image', 100)->nullable();
            $table->string('download', 100)->nullable();
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
        Schema::drop('books');
    }
}
