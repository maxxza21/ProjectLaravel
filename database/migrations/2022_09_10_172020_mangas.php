nes (30 sloc)  645 Bytes

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
        Schema::create('mangas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('secondname')->nullable();
            $table->string('picture');
            $table->string('author')->nullable();
            $table->string('artist')->nullable();
            $table->string('status');
            $table->string('website')->nullable();
            $table->string('synopsis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mangas');
    }
};