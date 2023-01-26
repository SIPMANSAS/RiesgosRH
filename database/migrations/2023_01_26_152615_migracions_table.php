<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MigracionsTable extends Migration
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
            $table->string('nombre', 200)->nullable();
            $table->string('descripcion', 200)->nullable();
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->string('id_alfanumerico', 20)->nullable();
            $table->integer('id_vdom_padre');
            $table->integer('id_grupo_valor_dominio');
            $table->timestamps();
        });

        Schema::create('par_tipos_categoria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_tipo_categoria', 11);
            $table->string('nombre', 255)->nullable();
            $table->integer('tipo_estado', 11);
            $table->integer('estado', 11);
        });

        Schema::create('par_tipos_fase', function (Blueprint $table) {
            $table->increments('id_fase');
            $table->string('descripcion', 50)->nullable();
            $table->integer('tipo_estado', 11);
            $table->integer('estado', 11);
        });

        Schema::create('par_categorias', function (Blueprint $table) {
            $table->integer('id_categoria', 11)->primary();
            $table->integer('id_categoria_padre', 11)->nullable();
            $table->string('descripcion', 50);
            $table->integer('tipo_estado', 11);
            $table->integer('estado', 11);
            $table->integer('id_tipo_categoria', 11);
        });

        Schema::create('rg_paises', function (Blueprint $table) {
            $table->integer('codigo', 11)->primary();
            $table->string('nombre', 30);
            $table->integer('tipo_estado', 11);
            $table->integer('estado', 11);
        });

        Schema::create('rie_tratamiento_riesgo', function (Blueprint $table) {
            $table->integer('id_tratamiento', 11)->primary();
            $table->integer('id_decision', 11);
            $table->string('plan_de_accion', 1000)->nullable();
            $table->integer('id_responsable', 11);
            $table->integer('fecha_implementacion', 11);
            $table->integer('id_indicador', 11);
            $table->integer('id_periodicidad_medicion', 11);
            $table->integer('id_documento_relacionado', 11);
            $table->integer('id_documentado', 11);
            $table->integer('id_funcionamiento', 11);
            $table->integer('id_perioricidad', 11);
            $table->integer('id_es_obligatorio', 11);
            $table->integer('id_naturaleza', 11);
            $table->integer('id_cubrimiento', 11);
        });

        Schema::create('par_causas', function (Blueprint $table) {
            $table->integer('id_causa', 11)->primary();
            $table->string('descripcion', 500);
            $table->integer('tipo_estado', 11);
            $table->integer('estado', 11);
            $table->integer('id_categoria', 11)->nullable();
        });

        Schema::create('par_consecuencias', function (Blueprint $table) {
            $table->integer('id_consecuencia', 11)->primary();
            $table->string('descripcion', 500);
            $table->integer('tipo_estado', 11);
            $table->integer('estado', 11);
            $table->integer('id_categoria', 11)->nullable();
        });

        Schema::create('par_fases', function (Blueprint $table) {
            $table->integer('id_fase', 11)->primary();
            $table->text('descripcion')->nullable();
            $table->integer('id_fase_padre', 11);
            $table->integer('id_tipo_fase', 11);
            $table->integer('tipo_estado', 11);
            $table->integer('estado', 11);
        });

        Schema::create('rg_departamentos', function (Blueprint $table) {
            $table->integer('codigo_pais', 11)->primary();
            $table->integer('codigo', 11);
            $table->string('nombre', 30);
            $table->integer('tipo_estado', 11);
            $table->integer('estado', 11)->primary();
        });

        Schema::create('par_actividades', function (Blueprint $table) {
            $table->integer('id_actividad', 11)->primary();
            $table->integer('id_proceso', 11);
            $table->integer('tipo_estado', 11);
            $table->integer('estado', 11);
            $table->text('descripcion');
        });

        Schema::create('rg_ciudades', function (Blueprint $table) {
            $table->integer('codigo_pais', 11)->primary();
            $table->integer('codigo_departamento', 11)->primary();
            $table->integer('codigo', 11)->primary();
            $table->string('nombre', 100);
            $table->string('es_capital', 1)->nullable();
            $table->integer('tipo_estado', 11)->nullable();
            $table->integer('estado', 11)->nullable();
        });

        Schema::create('ter_terceros', function (Blueprint $table) {
            $table->integer('identificacion', 11)->primary();
            $table->integer('vdom_tipo_identificacion', 11)->nullable();
            $table->date('fecha_expedicion')->nullable();
            $table->integer('pais_expedicion', 11)->nullable();
            $table->integer('departamento_expedicion', 11)->nullable();
            $table->integer('ciudad_expedicion', 11)->nullable();
            $table->string('nombres', 50)->nullable();
            $table->string('apellidos', 50)->nullable();
            $table->integer('vdom_nacionalidad', 11)->nullable();
            $table->integer('vdom_idioma', 11)->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('vdom_estado_civil', 11)->nullable();
            $table->integer('vdom_profesion', 11)->nullable();
            $table->integer('vdom_ocupacion', 11)->nullable();
            $table->integer('id_empresa', 11)->nullable();
            $table->integer('vdom_tipo_tercero', 11)->nullable();
            $table->integer('vdom_categoria_terceo', 11)->nullable();
            $table->integer('vdom_segmento_tercero', 11)->nullable();
            $table->integer('id_moneda', 11)->nullable();
            $table->integer('tipo_estado', 11)->nullable();
            $table->integer('estado', 11)->nullable();
            $table->integer('id_tercero', 11)->nullable();
            $table->integer('numero_identificacion', 11)->nullable();
            $table->integer('pais', 11)->nullable();
            $table->integer('departamento', 11)->nullable();
            $table->integer('ciudad', 11)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('correo_electronico', 50)->nullable();
            $table->integer('telefono', 11)->nullable();
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
        Schema::dropIfExists('cg_grupo_dominios');
        Schema::dropIfExists('cg_grupo_valores_dominio');
        Schema::dropIfExists('cg_valores_dominio');
        Schema::dropIfExists('par_tipos_categoria');
        Schema::dropIfExists('par_tipos_fase');
        Schema::dropIfExists('par_categorias');
        Schema::dropIfExists('rg_paises');
        Schema::dropIfExists('rie_tratamiento_riesgo');
        Schema::dropIfExists('par_causas');
    }
}
