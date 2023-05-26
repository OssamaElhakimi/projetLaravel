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
        Schema::table('questions', function (Blueprint $table) {
            $table->integer('question_type_id')->unsigned();
            $table->foreign('question_type_id')->references('id')->on('question_types');  
              });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->integer('questiontype_id')->unsigned();
            $table->foreign('questiontype_id')->references('id')->on('questiontypes');
        });
    }
};
