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
        Schema::connection(env('DB_CONNECTION_APP'))->create('authors', function (Blueprint $table) {//permite crear los campos
            $table->id('code');
            $table->foreignId('projects_id')->constrained('app.projects');
            $table->string('email');
            $table->string('identificacion');
            $table->string('name');
            $table->string('telephone');
            $table->string('age')->unsigned();
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
        Schema::connection(env('DB_CONNECTION_APP'))->dropIfExists('authors');
    }
}
