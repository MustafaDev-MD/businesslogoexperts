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
        Schema::create('package_requests', function (Blueprint $table) {
            $table->id();

            $table->string('service');
            $table->string('package');

            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email');
            $table->string('subject')->nullable();

            $table->text('message')->nullable();

            $table->json('files')->nullable(); // 👈 multiple files paths

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_requests');
    }
};
