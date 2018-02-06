<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradaProdutosTable extends Migration
{
  public function up()
  {
    Schema::create('entrada_produtos', function (Blueprint $table) {
      $table->increments('id');
      $table->integer("produto_id")->unsigned();
      $table->integer("fornecedor_id")->unsigned();
      $table->double('valor_compra', 8, 2);
      $table->text("lote");
      $table->integer("quantidade");
      $table->timestamps();
    });
  }
  public function down()
  {
    Schema::dropIfExists('entrada_produtos');
  }
}
