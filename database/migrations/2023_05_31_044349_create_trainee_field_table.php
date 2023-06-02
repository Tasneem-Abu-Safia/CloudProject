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
        Schema::create('trainee_field', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trainee_id')->constrained('trainees')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('field_id')->constrained('fields')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainee_field');
    }
};
