<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug', 100);
            $table->string('title', 125);
            $table->text('artikel');
            $table->string('kategori', 100)->default('Tidak Berkategori');
            $table->string('status', 100)->default('Draft');
            $table->string('penulis', 100);
            $table->string('tag', 100)->nullable();
            $table->string('thumbnail', 255)->nullable()->default('text');
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
        Schema::dropIfExists('post');
    }
}
