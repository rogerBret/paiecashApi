<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->timeTz('paiement_time');
            $table->integer('distant_paiement_link')->unique();
            $table->foreignId('costomer_account_id')->constrained();
            $table->foreignId('trader_account_id')->constrained();
            $table->foreignId('qrcode_id')->constrained();
            $table->foreign('costomer_account_id')
            ->references('id')
            ->on('costomer_ccounts')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('trader_account_id')
            ->references('id')
            ->on('trader_account')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('qrcode_id')
            ->references('id')
            ->on('qrcodes')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('paiements');
    }
}
