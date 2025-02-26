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
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); //PK and AI
            $table->string('name',50);
            $table->string('email',100)->unique();
            $table->bigInteger('mobile')->nullable();
            $table->date('dob')->nullable();
            $table->string('password');
            $table->enum('gender',['m','f','o']);
            $table->text('address')->nullable();
            $table->boolean('status')->default('1')->comment('1- active 0-inactive');
            $table->timestamps(); // createdAt, updatedAt, deletedAt
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
