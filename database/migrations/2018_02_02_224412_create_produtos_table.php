<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
  public function up()
  {
    Schema::create('produtos', function (Blueprint $table) {
      $table->increments('id');
      $table->integer("categoria_id")->unsigned();
      $table->text("nome");
      $table->text("descricao");
      $table->integer("quantidade");
      $table->enum('tipo', ['venda', 'aluguel']);
      $table->boolean('promocao');
      $table->integer('porcentagem_desconto');
      $table->boolean('destaque');
      $table->double('valor_compra', 8, 2);
      $table->double('valor_atual', 8, 2);
      $table->text("foto");
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('produtos');
  }
}
