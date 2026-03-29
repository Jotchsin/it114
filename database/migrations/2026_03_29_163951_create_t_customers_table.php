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
        Schema::create('t_customers', function (Blueprint $table) {
            $table->id(); //Auto-increment ID
            $table->string('cus_first_name');               // First name of customer
            $table->string('cus_last_name');                // Last name of customer
            $table->string('cus_email')->unique();          // Email address (must be unique)
            $table->string('cus_phone_number')->nullable(); // Phone number
            $table->string('cus_address')->nullable();      // Address
            $table->string('cus_city')->nullable();         // City
            $table->string('cus_state')->nullable();        // State or Region
            $table->string('cus_postal_code')->nullable();  // Postal Code
            $table->string('cus_country')->nullable();      // Country
            $table->timestamps();                            // Created and Updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_customers');
    }
};
