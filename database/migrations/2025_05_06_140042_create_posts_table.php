<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_release'); //было ли это в рассылке
            $table->string('title', 255);
            $table->string('alias', 255)->unique(); //ЧПУ
            $table->text('intro_text'); //текст превью
            $table->text('full_text'); //остальной текст
			$table->string('meta_desc', 255);
			$table->string('meta_key', 255);
			$table->integer('hits'); //просмотры
			$table->dateTime('date_show'); //дата публикации
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
