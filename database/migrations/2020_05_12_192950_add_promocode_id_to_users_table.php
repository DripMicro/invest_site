<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPromocodeIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('promocode_id')->nullable();
            $table->boolean('promocode_used')->default(false);

            /*
             * Foreign keys
             */
            $table->foreign('promocode_id')
                ->references('id')->on('promocodes')
                ->onDelete('set null');
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
            $table->dropColumn('promocode_id');
            $table->dropColumn('promocode_used');
        });
    }
}
