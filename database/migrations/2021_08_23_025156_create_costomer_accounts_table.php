<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostomerAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costomer_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained();
            $table->foreignId('utilisateur_id')->constrained();
            $table->foreign('account_id')
            ->references('id')
            ->on('accounts')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('utilisateur_id')
            ->references('id')
            ->on('utilisateur')
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
        Schema::dropIfExists('costomer_accounts');
    }
}
