<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('language_code'); // 'en', 'nl'
            $table->text('value');
            $table->timestamps();
            
            $table->unique(['key', 'language_code']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('translations');
    }
};