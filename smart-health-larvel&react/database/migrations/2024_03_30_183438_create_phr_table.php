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
        Schema::create('phr', function (Blueprint $table) {
            $table->id();
            $table->string('pid')->unique();
            $table->string('height');
            $table->string('weight');
            $table->string('bloodgroup');
            $table->string('bp');
            $table->string('sugar');
            $table->string('bmi');
            $table->string('dob');
            $table->string('age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phr');
    }
};
