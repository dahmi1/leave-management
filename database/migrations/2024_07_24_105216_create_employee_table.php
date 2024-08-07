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
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->string('workId', 255)->unique(); // i put it in a string datatype because i don't want to do arethmetic operation on them
            $table->string('firstName', 255);
            $table->string('middleName', 255);
            $table->string('lastName', 255);
            $table->string('email', 255)->unique();
            $table->string('phoneNo', 10)->unique(); // i put it in a string datatype because i don't want to do arethmetic operation on them
            $table->string('position', 255);
            $table->string('sector', 255);
            $table->string('nationalId', 10)->unique(); // i put it in a string datatype because i don't want to do arethmetic operation on them
            $table->date('joined');
            $table->date('dateOfBirth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
