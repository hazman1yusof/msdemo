<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->MEDIUMTEXT('description')->nullable();
            $table->string('status',30)->nullable();
            $table->string('priority',30)->nullable();
            $table->string('category',30)->nullable();
            $table->string('assign_to',10)->nullable();
            $table->string('report_by',10)->nullable();
            $table->string('created_by')->nullable();
            $table->string('updflg', 5)->default('0')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
