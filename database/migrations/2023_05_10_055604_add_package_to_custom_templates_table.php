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
        Schema::table('custom_templates', function (Blueprint $table) {
            if (!Schema::hasColumn('custom_templates', 'package')) {
                $table->string('package')->nullable()->default('all');
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
        Schema::table('custom_templates', function (Blueprint $table) {
            $table->dropColumn('package');
        });
    }
};
