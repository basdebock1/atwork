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
        Schema::create('leiders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tak');
            $table->string('fname');
            $table->string('lname');
            $table->text('totem');
            $table->mediumText('phone');
            $table->mediumText('email');
            $table->string('image_path');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leiders');
    }
};
