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
        Schema::create('dmaic_project_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('dmaic_project_id');
           

            
            $table->timestamps();
              // Define foreign keys
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
              $table->foreign('dmaic_project_id')->references('id')->on('dmaic_projects')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dmaic_project_user');
    }
};
