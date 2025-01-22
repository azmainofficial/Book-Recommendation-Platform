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
        Schema::create('books', function (Blueprint $table) {
            $table->id('id');
            $table->string('series')->nullable();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->unsignedBigInteger('author_id');
            $table->string('img_url')->nullable();
            $table->string('pdf_url');
            $table->string('language');
            $table->text('bio')->nullable();
            $table->integer('pages');
            $table->date('publish_date');
            $table->integer('total_view')->default(0);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
