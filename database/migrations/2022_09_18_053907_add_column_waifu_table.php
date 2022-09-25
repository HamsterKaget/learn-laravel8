<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnWaifuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('waifu', function (Blueprint $table) {
            $table->string('anime')->nullable()->after('waifu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('waifu', function (Blueprint $table) {
            $table->dropColumn('anime');
        });
    }
}
