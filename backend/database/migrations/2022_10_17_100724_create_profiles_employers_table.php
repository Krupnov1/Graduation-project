<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles_employers', function (Blueprint $table) {
            $table->id();
            $table->string('organization', 145);
            $table->string('locality');
            $table->string('name', 145);
            $table->string('last_name', 145);
            $table->bigInteger('phone', 25)->unique();
            $table->string('email', 145)->unique();
            $table->dateTime('created_at')->default(NOW());
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles_employers');
    }
}
