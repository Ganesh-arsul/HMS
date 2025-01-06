<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->string('medication');
            $table->text('instructions');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
};
