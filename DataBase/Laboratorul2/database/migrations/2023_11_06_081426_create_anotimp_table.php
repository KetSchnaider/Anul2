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
        Schema::create('anotimp', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('haine_id');
            $table->foreign('haine_id')
                  ->references('id')->on('haine')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anotimp');
    }
};
