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
        Schema::create('daires', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->unsignedBigInteger('mudurluk_id')->nullable();
            $table->timestamps();

            $table->softDeletes();

            $table->index('mudurluk_id', 'daire_mudurluk_idx');

            $table->foreign('mudurluk_id', 'daire_mudurluk_fk')->on('mudurluks')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daires');
    }
};

