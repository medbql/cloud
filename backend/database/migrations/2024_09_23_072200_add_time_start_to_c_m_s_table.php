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
        Schema::table('c_m_s', function (Blueprint $table) {
            $table->string('timeStart')->notNullable()->after('dayStart');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('c_m_s', function (Blueprint $table) {
            $table->dropColumn('timeStart');
        });
    }
};
