<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSub1sidebarMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub1_sidebar_menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vendor_id');
            $table->integer('sidebar_menu_id');
            $table->string('sub1_sidebar_menu');  
            $table->string('created_by');
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
        Schema::dropIfExists('sub1_sidebar_menu');
    }
}
