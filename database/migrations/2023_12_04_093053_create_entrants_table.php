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
            $table->foreignId('spetsialnost_id')->nullable()->constrained()->onDelete('cascade');
            $table->float('rating')->default(0);
            $table->integer('sirota')->boolean()->default(0);
            $table->integer('outregion')->boolean()->default(0);
            $table->string('passport')->nullable();
            $table->string('passport_seria', 4)->nullable();
            $table->string('passport_number', 6)->nullable();
            $table->string('passport_propiska')->nullable();
            $table->string('passport_dr')->nullable();
            $table->string('document_on_education')->nullable();
            $table->string('document_on_education_name')->nullable();
            $table->string('document_on_education_year', 4)->nullable();
            $table->string('medical_certificate')->nullable();
            $table->string('vaccination_certificate')->nullable();
            $table->string('snils')->nullable();
            $table->string('snils_number', 14)->nullable();
            $table->string('phone', 20);
            $table->timestamps();
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
