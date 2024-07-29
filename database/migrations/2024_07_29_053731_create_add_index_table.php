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
        Schema::table('watch_duration', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('watch_duration', function (Blueprint $table) {
            $table->foreign('id_paket')->references('id')->on('paket-langganan')->onDelete('cascade');
        });

        Schema::table('kelas', function (Blueprint $table) {
            $table->foreign('id_mentor')->references('id')->on('mentor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_index');
    }
};
