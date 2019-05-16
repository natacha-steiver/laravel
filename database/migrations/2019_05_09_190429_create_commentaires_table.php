<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('commentaire');
            $table->string('slug',100);
            $table->dateTime('created_at');
            $table->integer('ressources')->unsigned();
            $table->foreign('ressources')->references('id')->on('ressources');
            $table->integer('utilisateurs')->unsigned();

            $table->foreign('utilisateurs')->references('id')->on('utilisateurs');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentaires');
    }
}
