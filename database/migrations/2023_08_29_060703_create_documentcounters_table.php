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
        Schema::create('documentcounters', function (Blueprint $table) {
            $table->id();
            $table->string('document_type');
            $table->integer('subcode');
            $table->integer('starting_point');
            $table->integer('current_point');
            $table->boolean('active');
            $table->integer('created_by_user_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentcounters');
    }
};
