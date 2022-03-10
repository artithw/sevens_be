<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditConfirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_confirms', function (Blueprint $table) {
            $table->id();
            $table->integer('appointment_id');
            $table->integer('customer_id');
            $table->integer('audit_types_id');
            $table->integer('audit_type_lists_id');
            $table->integer('point');
            $table->integer('total');
            $table->tinyInteger('confirm')->default(0);
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
        Schema::dropIfExists('audit_confirms');
    }
}
