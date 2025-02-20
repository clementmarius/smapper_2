<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   /*  public function up(): void
    {
        Schema::create('spots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('location');
            $table->boolean('is_validated');
            $table->foreignId('typeId')->constrained('spot_types');
            $table->foreignId('userId')->constrained('users');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
        });
    } */

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spots');
    }
};
