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
        Schema::create('patients', function (Blueprint $table) {
            $table->id(); // this will create an unsigned big integer id column
            $table->string('name');
            $table->date('birthday');
            $table->string('phone');
            $table->enum('gender', ['male', 'female']);
            $table->string('blood');
            $table->text('address');
            $table->float('weight');
            $table->float('height');
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
        Schema::dropIfExists('patients');
    }
};
