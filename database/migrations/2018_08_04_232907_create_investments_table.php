<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('bundle_plan');
            $table->string('email');
            $table->string('amount');
            $table->string('wallet_id');
            $table->string('wallet_email');
            $table->string('payment_img')->nullable();
            $table->string('ref_bonuse')->nullable();
            $table->string('due_earnings')->nullable();
            $table->boolean('investment_status')->default(0);
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
        Schema::dropIfExists('investments');
    }
}
