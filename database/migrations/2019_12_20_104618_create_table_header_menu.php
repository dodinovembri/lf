<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHeaderMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vendor_id');
            $table->string('menu');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();              
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
        Schema::dropIfExists('header_menu');
    }
}
