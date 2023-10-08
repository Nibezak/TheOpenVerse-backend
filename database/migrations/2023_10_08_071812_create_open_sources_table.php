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
        Schema::create('open_sources', function (Blueprint $table) {
            $table->id();
            $table->string('website-name');
            $table->string('thumbnail');
            $table->string('gif')->nullable();
            $table->string('github-code');
            $table->string('website-link')->nullable();
            $table->string('blog-link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('open_sources');
    }
};
