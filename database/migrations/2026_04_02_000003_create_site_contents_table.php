<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('site_contents', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('lang');
            $table->text('content');
            $table->timestamps();

            $table->unique(['key', 'lang']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('site_contents');
    }
};
