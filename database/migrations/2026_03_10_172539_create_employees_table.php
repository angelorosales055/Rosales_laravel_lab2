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
    Schema::create('employees', function (Blueprint $table) {
        $table->increments('employee_id'); // PK
        $table->string('first_name', 20)->nullable();
        $table->string('last_name', 25); // NN
        $table->string('email', 100)->unique(); // NN
        $table->string('phone_number', 20)->nullable();
        $table->date('hire_date'); // NN
        $table->unsignedInteger('job_id'); // FK
        $table->decimal('salary', 8, 2); // NN
        $table->unsignedInteger('manager_id')->nullable(); // FK to self
        $table->unsignedInteger('department_id')->nullable(); // FK
        
        $table->foreign('job_id')->references('job_id')->on('jobs');
        $table->foreign('manager_id')->references('employee_id')->on('employees');
        $table->foreign('department_id')->references('department_id')->on('departments');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
