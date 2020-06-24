<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableTheRoof extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('theroof', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('openingstijd')->change();
            $table->string('sluitingstijd')->change();
            $table->boolean('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('theroof', function (Blueprint $table) {
            //
        });
    }
}
