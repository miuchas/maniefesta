<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriasTable extends Migration
{
  public function up()
  {
    Schema::create('categorias', function (Blueprint $table) {
      $table->increments('id');
      $table->text("nome");
      $table->text("descricao");
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('categorias');
  }
}
