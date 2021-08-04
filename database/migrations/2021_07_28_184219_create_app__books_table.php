<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('app.books', function (Blueprint $table) {
            $table->id('code')->comment('my comment');
            $table->string('email')->comment('email');
            $table->date('date')->comment('fecha exacta');
            $table->text('description')->comment('descripcion del libro')->nullable();
            $table->boolean('genere')->comment('genero al que pertenece');
            $table->string('title')->comment('titulo del libro');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('app.books');
    }
}
