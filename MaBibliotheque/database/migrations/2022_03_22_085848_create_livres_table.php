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
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->foreignId("categorie_id")->constrained();
            $table->foreignId("editeur_id")->nullable()->constrained()->onDelete("cascade");
            $table->foreignId("auteur_id")->nullable()->constrained()->onDelete("cascade");
            $table->string("isbn");
            $table->string("nom");
            $table->enum("etat", ["neuf", "usé", "très usé"])->default("neuf");
            $table->string("langue");
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
        Schema::dropIfExists('livres');
    }
};
