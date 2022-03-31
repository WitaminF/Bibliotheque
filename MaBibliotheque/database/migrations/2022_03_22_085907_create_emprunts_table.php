<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();
            $table->foreignId("client")->constrained()->onDelete("cascade");
            $table->foreignId("exemplaire")->constrained();
            $table->timestamp("date_emprunt");
            $table->timestamp("date_retour")->nullable();
            $table->string("statut_emprunt")->nullable();
            $table->timestamp("jour_retour")->nullable();
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
        Schema::dropIfExists('emprunts');
    }
};