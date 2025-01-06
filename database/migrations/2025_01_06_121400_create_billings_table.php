<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id'); // Using unsignedBigInteger for foreign key
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade'); // Foreign key constraint
            $table->enum('payment_mode', ['cash', 'card', 'online']);
            $table->enum('payment_status', ['paid', 'unpaid', 'pending']);
            $table->decimal('due_amount', 8, 2);
            $table->decimal('deposited_amount', 8, 2);
            $table->decimal('vat', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
