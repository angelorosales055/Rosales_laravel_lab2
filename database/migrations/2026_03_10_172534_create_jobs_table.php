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
    Schema::create('jobs', function (Blueprint $table) {
        $table->increments('job_id'); // PK
        $table->string('job_title', 35); // NN
        $table->decimal('min_salary', 8, 2)->nullable();
        $table->decimal('max_salary', 8, 2)->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
