<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();//Créé la clé primaire id
            $table->string('title',255);//Le titre de l'article
            $table->string('image')->nullable();//Couverture de l'article
            $table->text('content')->nullable();//Contenue de l'article
            $table->string('description')->nullable();//Contenue de l'article
            $table->string('file_path')->nullable();//Chemin du fichier pdf de l'article
            $table->foreignId('user_id')->nullable();//Id de l'user ayant rédiger l'article
            $table->timestamps();//Création des champs created_at et update_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
