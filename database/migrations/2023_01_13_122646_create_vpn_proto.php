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
        Schema::create('vpn_proto', function (Blueprint $table) {
            $table->id();
            $table->string('id_server')->nullable();
            $table->string('host')->nullable();
            $table->string('port')->nullable();
            $table->string('protocol')->nullable();
            $table->bigInteger('limit');
            $table->bigInteger('active');
            $table->text('path')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vpn_proto');
    }
};
