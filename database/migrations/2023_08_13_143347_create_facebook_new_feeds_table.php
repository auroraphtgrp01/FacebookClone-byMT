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
            // $table->string('avatar');
            // $table->string('username');
            $table->string('id_user');
            // $table->dateTime('time_create');
            $table->text('content')->default('');
            $table->integer('id_picture')->default(0);
            $table->string('count_react')->default(0);
            $table->string('count_comment')->default(0);
            $table->integer('like_status')->comment('0-> like ; 1-> unlike')->default(1);
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
