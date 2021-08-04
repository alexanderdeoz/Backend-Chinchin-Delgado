<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//crea
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('app.authors', function (Blueprint $table) {//permite crear los campos
            $table->id();
            $table->foreignId('book_id')->constrained('app.books');
            $table->string('email');
            $table->string('identificacion');
            $table->string('name');
            $table->integer('telephone');
            $table->string('age')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//elimina
    {
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('app.authors');
    }
}
