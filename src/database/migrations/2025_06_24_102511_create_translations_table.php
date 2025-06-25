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
            $table->string('key'); // e.g., 'nav.home', 'button.add_to_cart'
            $table->foreignId('language_id')->constrained()->onDelete('cascade');
            $table->text('value');
            //$table->string('group')->default('general'); // general, navigation, forms, etc.
            $table->timestamps();
            
            $table->unique(['key', 'language_id']);
            $table->index(['key', 'group']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('translations');
    }
};