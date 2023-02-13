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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->text('fname')->nullable();
            $table->text('lname')->nullable();
            $table->unsignedBigInteger('daire_id');
            $table->unsignedBigInteger('phone')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->softDeletes();

            $table->index('user_id', 'profile_user_idx');
            $table->index('daire_id', 'profile_daire_idx');

            $table->foreign('user_id', 'profile_user_fk')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('daire_id', 'profile_daire_fk')->references('id')->on('daires')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
