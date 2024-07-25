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
        Schema::create('leave', function (Blueprint $table) {
            $table->id();
            $table->enum('leaveType', ['yearly', 'sickness', 'educational', 'unpaid']);
            $table->date('leave_report_applied_at');
            $table->date('leave_start_at');
            $table->date('leave_end_at');
            $table->date('resume_working_at');
            $table->foreignIdFor(\App\Models\Employee::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave');
    }
};
