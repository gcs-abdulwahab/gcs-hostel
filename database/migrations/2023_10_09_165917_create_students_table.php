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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('cnic');
            $table->date('dob');
            $table->string('email');
            $table->string('guardian_name');
            $table->string('guardian_phone');
            $table->string('guardian_address');
            $table->string('guardian_email')->nullable();
            $table->string('guardian_occupation')->nullable();

            // whether student is active or inactive
            // $table->enum('status', ['active', 'inactive' , 'blacklisted' ])->default('active');

            $table->foreignId('hostel_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
