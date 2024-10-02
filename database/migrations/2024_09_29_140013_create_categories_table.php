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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->timestamps();
        });

        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->date('release_date')->nullable();
            $table->integer('duration')->nullable(); // in minutes
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Foreign key to categories
            $table->string('image_url', 255)->nullable();
            $table->string('trailer_url', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Foreign key to categories
            $table->string('image_url', 255)->nullable();
            $table->string('trailer_url', 255)->nullable();
            $table->timestamps();
        });

        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->integer('episode_number');
            $table->integer('season_number')->nullable();
            $table->foreignId('show_id')->constrained()->onDelete('cascade'); // Foreign key to shows
            $table->integer('duration')->nullable(); // in minutes
            $table->date('air_date')->nullable();
            $table->timestamps();
        });

        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('email', 150)->unique();
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('watch_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Reference to the users table
            $table->foreignId('movie_id')->constrained()->onDelete('cascade'); // Reference to the movies table
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Reference to the categories table
            $table->string('movie_name', 255); // Movie name for additional info
            $table->year('release_year')->nullable(); // Release year of the movie
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('movies');
        Schema::dropIfExists('shows');
        Schema::dropIfExists('episodes');
        Schema::dropIfExists('admins');
        Schema::dropIfExists('users');
    }
};