<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
                Schema::disableForeignKeyConstraints();
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('marital_status', ['Single', 'Married', 'Divorced', 'Widowed']);
            $table->date('date_of_birth');
            $table->string('gsm_number');
            $table->text('address');
            $table->string('nok_name'); // Next of Kin
            $table->string('nok_email')->nullable();
            $table->string('nok_gsm_number');
            $table->text('nok_address');
            $table->foreignId('lga_id')->constrained()->onDelete('cascade');
            $table->string('passport_photo')->nullable();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
