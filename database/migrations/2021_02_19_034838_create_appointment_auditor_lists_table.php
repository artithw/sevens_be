<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentAuditorListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_auditor_lists', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('appointment_id');
            $table->bigInteger('auditors_id');
            $table->text('auditor_type');
            $table->boolean('create_auditor_checklist')->default(0);
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
        Schema::dropIfExists('appointment_auditor_lists');
    }
}
