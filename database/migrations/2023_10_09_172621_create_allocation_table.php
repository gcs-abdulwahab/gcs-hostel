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
        Schema::create('allocation', function (Blueprint $table) {
            $table->id();

            // room is allocated to many students
            $table->foreignId('room_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // student is allocated to many rooms over the period of time
            $table->foreignId('student_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            // allocation date
            $table->date('check_in'); // which is same as created date
            // deallocation date
            $table->date('check_out')->nullable();

            // allocation status
          //  $table->enum('status', ['active', 'inactive'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allocation');
    }
};
