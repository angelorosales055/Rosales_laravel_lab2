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
    Schema::create('countries', function (Blueprint $table) {
        $table->char('country_id', 2)->primary(); // PK, char(2)
        $table->string('country_name', 40)->nullable();
        $table->unsignedInteger('region_id'); // FK
        $table->foreign('region_id')->references('region_id')->on('regions');
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
