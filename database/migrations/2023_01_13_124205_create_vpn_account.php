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
        Schema::create('vpn_account', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('id_vpn_proto')->nullable();
            $table->string('type_vpn')->nullable();
            $table->string('host')->nullable();
            $table->string('user')->nullable();
            $table->string('password')->nullable();
            $table->date('expired');
            $table->text('path')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vpn_account');
    }
};
