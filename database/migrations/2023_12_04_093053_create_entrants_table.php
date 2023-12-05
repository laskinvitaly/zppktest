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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('patronymic');
            $table->string('email')->unique();
            $table->string('vkontakte');
            $table->string('passport');
            $table->string('document_on_education');
            $table->string('medical_certificate');
            $table->string('vaccination_certificate');
            $table->string('snils');
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
