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
    Schema::create('dependents', function (Blueprint $table) {
        $table->increments('dependent_id'); // PK
        $table->string('first_name', 50); // NN
        $table->string('last_name', 50); // NN
        $table->string('relationship', 25); // NN
        $table->unsignedInteger('employee_id'); // FK
        $table->foreign('employee_id')->references('employee_id')->on('employees');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dependents');
    }
};
