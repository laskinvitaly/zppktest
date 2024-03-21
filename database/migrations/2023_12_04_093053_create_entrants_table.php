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
        Schema::create('entrants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('vkontakte')->nullable();
            $table->string('passport')->nullable();
            $table->string('document_on_education')->nullable();
            $table->string('medical_certificate')->nullable();
            $table->string('vaccination_certificate')->nullable();
            $table->string('snils')->nullable();
            $table->string('phone', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrants');
    }
};
