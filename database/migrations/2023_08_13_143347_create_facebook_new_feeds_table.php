<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facebook_new_feeds', function (Blueprint $table) {
            $table->id();
            $table->string('avatar');
            $table->string('username');
            $table->string('id_user');
            $table->dateTime('time_create');
            $table->text('content');
            $table->string('hinh_anh');
            $table->string('count_react');
            $table->string('count_comment');
            $table->integer('like_status')->comment('0-> like ; 1-> unlike');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facebook_new_feeds');
    }
};
