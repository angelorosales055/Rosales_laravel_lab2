<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('departments', function (Blueprint $table) {
        $table->increments('department_id'); // PK
        $table->string('department_name', 30); // NN
        $table->unsignedInteger('location_id')->nullable(); // FK
        $table->foreign('location_id')->references('location_id')->on('locations');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departments');
    }
};
