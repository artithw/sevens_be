<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuditAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->text('appointment_name');
            $table->bigInteger('customer_id');
            $table->date('appointment_date');
            $table->string('appointment_time');
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
        Schema::dropIfExists('audit_appointments');
    }
}
