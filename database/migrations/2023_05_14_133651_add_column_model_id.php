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
        Schema::table('exams', function (Blueprint $table) {
            $table->integer('modul_id')->unsigned();
            $table->foreign('modul_id')->references('id')->on('moduls');
                });
                Schema::table('enseigners', function (Blueprint $table) {
                    $table->integer('modul_id')->unsigned();
                    $table->foreign('modul_id')->references('id')->on('moduls');
                        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exams', function (Blueprint $table) {
            $table->integer('modul_id')->unsigned();
            $table->foreign('modul_id')->references('id')->on('moduls');
                });
        Schema::table('enseigners', function (Blueprint $table) {
            $table->integer('modul_id')->unsigned();
            $table->foreign('modul_id')->references('id')->on('moduls');
                });
    }
};
