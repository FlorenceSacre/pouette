<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key
            $table->string('titre');
            $table->enum('categorie',['paysage','animaux','hiver']);
            $table->string('videoBQ');
            $table->string('videoHQ');
            $table->string('image');

            $table->bigInteger('comments_id')
                ->unsigned()
                ->index()
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('video');
    }
}
