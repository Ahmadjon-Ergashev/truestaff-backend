<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('contact_inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('company');
            $table->string('email');
            $table->text('message');
            $table->string('status')->default('new');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_inquiries');
    }
};
