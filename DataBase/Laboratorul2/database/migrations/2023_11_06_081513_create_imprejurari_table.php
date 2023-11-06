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
        Schema::create('imprejurari', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('anotimp_id');
            $table->foreign('anotimp_id')
                  ->references('id')->on('anotimp')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imprejurari');
    }
};
