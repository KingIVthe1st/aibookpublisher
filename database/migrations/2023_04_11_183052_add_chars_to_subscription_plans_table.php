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
        Schema::table('subscription_plans', function (Blueprint $table) {
            // These columns already exist in create_subscription_plans_table migration
            // Adding checks for backward compatibility
            if (!Schema::hasColumn('subscription_plans', 'characters')) {
                $table->integer('characters')->default(0);
            }
            if (!Schema::hasColumn('subscription_plans', 'minutes')) {
                $table->integer('minutes')->default(0);
            }
            if (!Schema::hasColumn('subscription_plans', 'voiceover_feature')) {
                $table->boolean('voiceover_feature')->nullable()->default(1);
            }
            if (!Schema::hasColumn('subscription_plans', 'transcribe_feature')) {
                $table->boolean('transcribe_feature')->nullable()->default(1);
            }
            if (!Schema::hasColumn('subscription_plans', 'code_feature')) {
                $table->boolean('code_feature')->nullable()->default(1);
            }
            if (!Schema::hasColumn('subscription_plans', 'image_storage_days')) {
                $table->integer('image_storage_days')->default(0);
            }
            if (!Schema::hasColumn('subscription_plans', 'voiceover_storage_days')) {
                $table->integer('voiceover_storage_days')->default(0);
            }
            if (!Schema::hasColumn('subscription_plans', 'whisper_storage_days')) {
                $table->integer('whisper_storage_days')->default(0);
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscription_plans', function (Blueprint $table) {
            $table->dropColumn('characters');
            $table->dropColumn('minutes');
            $table->dropColumn('voiceover_feature');
            $table->dropColumn('transcribe_feature');
            $table->dropColumn('code_feature');
            $table->dropColumn('image_storage_days');
            $table->dropColumn('voiceover_storage_days');
            $table->dropColumn('whisper_storage_days');
        });
    }
};
