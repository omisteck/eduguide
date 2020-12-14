<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('application_id')->references('id')->on('applications')->onDelete('cascade');
            $table->string('name');
            $table->string('reference');
            $table->string('account');
            $table->string('amount');
            $table->string('phone');
            $table->string('email');
            $table->string('interested_programme');
            $table->string('date');
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
        Schema::dropIfExists('transactions');
    }
}
