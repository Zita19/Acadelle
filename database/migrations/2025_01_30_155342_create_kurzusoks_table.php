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
        Schema::create('kurzusok', function (Blueprint $table) {
            $table->id();
            $table->string('kurzus_nev');
            $table->string('helyszin');
            $table->dateTime('kepzes_ideje');
            $table->boolean('online')->default(0)->after('helyszin');
            $table->integer('dij')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurzusok');
    }
};
