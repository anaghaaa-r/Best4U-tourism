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
        Schema::create('destination_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade');
            $table->string('title');
            $table->string('duration');
            $table->string('thumbnail');
            $table->string('image')->nullable();
            $table->text('tour_description')->nullable();
            $table->string('price')->nullable();
            // $table->string('guest_count')->nullable();
            // $table->string('departure_from')->nullable();
            // $table->string('departure_time')->nullable();
            // $table->string('arrival_to')->nullable();
            // $table->string('arrival_time')->nullable();
            $table->json('places_covered')->nullable();
            $table->json('tour_highlights')->nullable();
            $table->json('package_includes')->nullable();
            $table->json('package_excludes')->nullable();
            $table->text('cancellation_policy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination_packages');
    }
};
