<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('page_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained()->cascadeOnDelete();
            $table->string('locale')->index();
            $table->text('content');
            $table->timestamps();
            
            $table->unique(['page_id', 'locale']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('page_translations');
    }
};