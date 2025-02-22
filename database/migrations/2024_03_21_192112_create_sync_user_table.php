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
        Schema::create('sync_user', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('email')->unique();
            $table->text('contact_number')->nullable();
            $table->text('image')->nullable();

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sync_user');
    }
};
