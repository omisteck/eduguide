<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('interested_programme');
            $table->string('preferred_course');
            $table->string('study_centre');
            $table->enum('status',['Approved', 'Pending', 'Cancel'])->default('Pending');
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
        Schema::dropIfExists('applications');
    }
}
