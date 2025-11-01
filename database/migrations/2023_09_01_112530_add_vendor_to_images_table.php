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
        Schema::table('images', function (Blueprint $table) {
            $table->string('vendor')->default('dalle')->nullable();
            $table->longText('negative_prompt')->nullable();
            $table->string('image_style')->nullable();
            $table->string('image_lighting')->nullable();
            $table->string('image_medium')->nullable();
            $table->string('image_mood')->nullable();
            $table->string('image_artist')->nullable();
            $table->string('sd_prompt_strength')->nullable();
            $table->string('sd_steps')->nullable();
            $table->string('sd_diffusion_samples')->nullable();
            $table->string('sd_clip_guidance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('vendor');
            $table->dropColumn('negative_prompt');
            $table->dropColumn('image_style');
            $table->dropColumn('image_lighting');
            $table->dropColumn('image_medium');
            $table->dropColumn('image_mood');
            $table->dropColumn('image_artist');
            $table->dropColumn('sd_prompt_strength');
            $table->dropColumn('sd_steps');
            $table->dropColumn('sd_diffusion_samples');
            $table->dropColumn('sd_clip_guidance');
        });
    }
};
