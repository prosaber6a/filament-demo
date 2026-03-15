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
        Schema::create('h_r_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agent_id')->constrained()->onDelete('cascade');
            // Personal Information
            $table->string('name');
            $table->string('father')->nullable();
            $table->string('mother')->nullable();
            $table->date('dob');
            $table->string('mofa_id');
            $table->string('old_mofa_id')->nullable();
            $table->string('birth_place');
            $table->string('prev_nationality')->nullable();
            $table->string('nationality');
            $table->enum('sex', ['Male', 'Female']);
            $table->enum('marital_status', ['Married', 'Unmarried']);
            $table->string('sect')->nullable();
            $table->enum('religion', ['Muslim', 'Non-Muslim']);
            $table->string('address')->nullable();

            // Passport Information
            $table->string('passport_no');
            $table->date('passport_issue_date');
            $table->date('passport_expiry_date');
            $table->string('passport_issue_place');

            // Visa Information
            $table->string('visa_no');
            $table->date('visa_issue_date');
            $table->string('sponsor_name');
            $table->bigInteger('sponsor_id')->unsigned();
            $table->string('visa_issue_place_ar')->nullable();
            $table->string('visa_issue_place_en')->nullable();
            $table->string('qualification_ar')->nullable();
            $table->string('qualification_en')->nullable();
            $table->string('profession_ar');
            $table->string('profession_en');
            $table->bigInteger('musaned_no')->unsigned()->nullable();
            $table->bigInteger('wakala_no')->unsigned();

            // Police Clearance Information & Driving License Information
            $table->string('police_clearance_no')->nullable();
            $table->date('police_clearance_issue_date')->nullable();
            $table->enum('driving_license_type', ['Light', 'Medium','Heavy','Motorcycle', 'Three-Wheeler', 'PSV', 'Others'])->nullable();
            // Other Information
            $table->string('stay_duration')->default('2 years');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_r_s');
    }
};
