<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBusinessNameToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('name');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('business_name')->nullable()->after('last_name');
            $table->string('address')->nullable()->after('business_name');
            $table->longText('description')->nullable()->after('business_name');
            $table->string('avatar')->nullable()->after('name');
            $table->string('id_card')->nullable()->after('description');
            $table->string('selfie_photo')->nullable()->after('id_card');
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
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('business_name');
            $table->dropColumn('address');
            $table->dropColumn('description');
            $table->dropColumn('avatar');
            $table->dropColumn('id_card');
            $table->dropColumn('selfie_photo');
        });
    }
}
