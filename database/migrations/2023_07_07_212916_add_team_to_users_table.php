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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('member_of')->nullable(); 
            $table->integer('member_limit')->default(0)->nullable(); 
            $table->boolean('member_use_credits_template')->default(1)->nullable(); 
            $table->boolean('member_use_credits_chat')->default(1)->nullable(); 
            $table->boolean('member_use_credits_code')->default(1)->nullable(); 
            $table->boolean('member_use_credits_voiceover')->default(1)->nullable(); 
            $table->boolean('member_use_credits_speech')->default(1)->nullable(); 
            $table->boolean('member_use_credits_image')->default(1)->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('member_of');
            $table->dropColumn('member_limit');
            $table->dropColumn('member_use_credits_template');
            $table->dropColumn('member_use_credits_chat');
            $table->dropColumn('member_use_credits_code');
            $table->dropColumn('member_use_credits_voiceover');
            $table->dropColumn('member_use_credits_speech');
            $table->dropColumn('member_use_credits_image');
        });
    }
};
