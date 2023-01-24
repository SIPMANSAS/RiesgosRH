<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CgGrupoDominios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cg_dominios', function (Blueprint $table) {
            $table->increments("identificador");
            $table->string('descripcion', 50)->nullable();
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->integer('id_grupo_dominio');
            $table->timestamps();
        });

        Schema::create('cg_grupo_dominios', function (Blueprint $table) {
            $table->increments("identificador");
            $table->string('nombre', 50)->nullable();
            $table->timestamps();
        });

        Schema::create('cg_grupo_valores_dominio', function (Blueprint $table) {
            $table->increments("identificador");
            $table->string('nombre', 50);
            $table->integer('id_grupo_dominio');
            $table->timestamps();
        });

        Schema::create('cg_valores_dominio', function (Blueprint $table) {
            $table->integer('id_dominio');
            $table->increments('identificador');
            $table->string('nombre',200)->nullable();
            $table->string('descripcion',200)->nullable();
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->string('id_alfanumerico',20)->nullable();
            $table->integer('id_vdom_padre');
            $table->integer('id_grupo_valor_dominio');
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
        Schema::dropIfExists('cg_dominios');
    }
}
