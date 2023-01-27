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
            $table->integer("identificador")->primary();
            $table->string('descripcion', 50)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('id_grupo_dominio')->nullable();
        });

        Schema::create('cg_grupo_dominios', function (Blueprint $table) {
            $table->integer("identificador")->primary();
            $table->string('nombre', 50)->nullable();
        });

        Schema::create('cg_grupo_valores_dominio', function (Blueprint $table) {
            $table->integer("identificador")->primary();
            $table->string('nombre', 50)->nullable();
            $table->integer('id_grupo_dominio')->nullable();
        });

        Schema::create('cg_valores_dominio', function (Blueprint $table) {
            $table->integer('id_dominio')->nullable();
            $table->integer('identificador')->primary();
            $table->string('nombre', 200)->nullable();
            $table->string('descripcion', 200)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->string('id_alfanumerico', 20)->nullable();
            $table->integer('id_vdom_padre')->nullable();
            $table->integer('id_grupo_valor_dominio')->nullable();
        });

        Schema::create('par_tipos_categoria', function (Blueprint $table) {
            $table->integer('id_tipo_categoria')->primary();
            $table->string('nombre', 255)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
        });

        Schema::create('par_tipos_fase', function (Blueprint $table) {
            $table->integer('id_fase')->primary();
            $table->string('descripcion', 50)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
        });

        Schema::create('par_categorias', function (Blueprint $table) {
            $table->integer('id_categoria')->primary();
            $table->integer('id_categoria_padre')->nullable();
            $table->string('descripcion', 50)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('id_tipo_categoria')->nullable();
        });

        Schema::create('rg_paises', function (Blueprint $table) {
            $table->integer('codigo')->primary();
            $table->string('nombre', 30)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
        });

        Schema::create('rie_tratamiento_riesgo', function (Blueprint $table) {
            $table->integer('id_tratamiento')->primary();
            $table->integer('id_decision')->nullable();
            $table->string('plan_de_accion', 1000)->nullable();
            $table->integer('id_responsable')->nullable();
            $table->integer('fecha_implementacion')->nullable();
            $table->integer('id_indicador')->nullable();
            $table->integer('id_periodicidad_medicion')->nullable();
            $table->integer('id_documento_relacionado')->nullable();
            $table->integer('id_documentado')->nullable();
            $table->integer('id_funcionamiento')->nullable();
            $table->integer('id_perioricidad')->nullable();
            $table->integer('id_es_obligatorio')->nullable();
            $table->integer('id_naturaleza')->nullable();
            $table->integer('id_cubrimiento')->nullable();
        });

        Schema::create('par_causas', function (Blueprint $table) {
            $table->integer('id_causa')->primary();
            $table->string('descripcion', 500);
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('id_categoria')->nullable();
        });

        Schema::create('par_consecuencias', function (Blueprint $table) {
            $table->integer('id_consecuencia')->primary();
            $table->string('descripcion', 500)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('id_categoria')->nullable();
        });

        Schema::create('par_fases', function (Blueprint $table) {
            $table->integer('id_fase')->primary();
            $table->text('descripcion')->nullable();
            $table->integer('id_fase_padre')->nullable();
            $table->integer('id_tipo_fase')->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
        });

        Schema::create('rg_departamentos', function (Blueprint $table) {
            $table->integer('codigo_pais')->primary();
            $table->integer('codigo')->nullable();
            $table->string('nombre', 30)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->unique();
        });

        Schema::create('par_actividades', function (Blueprint $table) {
            $table->integer('id_actividad')->primary();
            $table->integer('id_proceso')->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->text('descripcion')->nullable();
        });

        Schema::create('rg_ciudades', function (Blueprint $table) {
            $table->integer('codigo_pais')->primary();
            $table->integer('codigo_departamento')->unique();
            $table->integer('codigo')->unique();
            $table->string('nombre', 100)->nullable();
            $table->string('es_capital', 1)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
        });

        Schema::create('ter_terceros', function (Blueprint $table) {
            $table->integer('identificacion')->primary();
            $table->integer('vdom_tipo_identificacion')->nullable();
            $table->date('fecha_expedicion')->nullable();
            $table->integer('pais_expedicion')->nullable();
            $table->integer('departamento_expedicion')->nullable();
            $table->integer('ciudad_expedicion')->nullable();
            $table->string('nombres', 50)->nullable();
            $table->string('apellidos', 50)->nullable();
            $table->integer('vdom_nacionalidad')->nullable();
            $table->integer('vdom_idioma')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('vdom_estado_civil')->nullable();
            $table->integer('vdom_profesion')->nullable();
            $table->integer('vdom_ocupacion')->nullable();
            $table->integer('id_empresa')->nullable();
            $table->integer('vdom_tipo_tercero')->nullable();
            $table->integer('vdom_categoria_terceo')->nullable();
            $table->integer('vdom_segmento_tercero')->nullable();
            $table->integer('id_moneda')->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('id_tercero')->nullable();
            $table->integer('numero_identificacion')->nullable();
            $table->integer('pais')->nullable();
            $table->integer('departamento')->nullable();
            $table->integer('ciudad')->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('correo_electronico', 50)->nullable();
            $table->integer('telefono')->nullable();
        });

        Schema::create('pro_proyectos', function (Blueprint $table) {
            $table->integer('id_proyecto')->primary();
            $table->text('nombre')->nullable();
            $table->integer('id_contratista')->nullable();
            $table->integer('id_contratante')->nullable();
            $table->integer('id_interventoria')->nullable();
            $table->text('objeto_contraactual')->nullable();
            $table->integer('id_etapa_proyecto')->nullable();
            $table->integer('id_actividad')->nullable();
            $table->integer('id_responsable')->nullable();
            $table->integer('id_formato')->nullable();
            $table->text('archivos')->nullable();
            $table->integer('id_tipo_contratacion')->nullable();
        });

        Schema::create('rie_riesgos', function (Blueprint $table) {
            $table->integer('id_riesgo')->primary();
            $table->string('descripcion', 50)->nullable();
            $table->integer('probabilidad')->nullable();
            $table->integer('impacto')->nullable();
            $table->integer('id_categoria')->nullable();
            $table->integer('id_fase')->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('id_actividad')->nullable();
            $table->integer('id_proyecto')->nullable();
            $table->string('nombre_corto', 20)->nullable();
            $table->date('fecha_identificacion')->nullable();
            $table->integer('id_tipo_asignacion')->nullable();
            $table->text('factores_riesgo')->nullable();
        });

        Schema::create('rie_seguimiento', function (Blueprint $table) {
            $table->integer('id_seguimiento')->primary();
            $table->integer('id_periodo')->nullable();
            $table->text('descripcion_seguimiento')->nullable();
            $table->integer('id_riesgo')->nullable();
            $table->integer('probabilidad')->nullable();
            $table->integer('impacto')->nullable();
            $table->text('lecciones_aprendidas')->nullable();
            $table->integer('id_afectividad_tratamiento')->nullable();
            $table->integer('id_clasificacion')->nullable();
            $table->integer('id_tolerabilidad')->nullable();
            $table->text('decisiones')->nullable();
            $table->text('resultado_indicador')->nullable();
            $table->text('factores_riesgo')->nullable();
            $table->text('medidas')->nullable();
        });

        Schema::create('ter_canales_contacto', function (Blueprint $table) {
            $table->integer('id_tercero')->primary();
            $table->integer('vdom_canal_ubicacion')->nullable();
            $table->string('descripcion', 50)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->integer('vdom_tipo')->nullable();
            $table->integer('vdom_clase')->nullable();
            $table->integer('identificacion');
            $table->integer('id_pais')->nullable();
            $table->integer('id_departamento')->nullable();
            $table->integer('id_ciudad')->nullable();
        });

        Schema::create('ter_cruce_terceros', function (Blueprint $table) {
            $table->integer('id_tercero_principal')->primary();
            $table->integer('id_tercero_secundario')->unique();
            $table->integer('consecutivo')->unique();
            $table->integer('tipo_estado')->nullable();
            $table->date('fecha_inicial')->nullable();
            $table->date('fecha_vigencia')->nullable();
            $table->integer('vdom_tipo_relacion')->nullable();
            $table->integer('estado')->nullable();
        });

        Schema::create('rie_causas_riesgo', function (Blueprint $table) {
            $table->integer('id_causa')->primary();
            $table->integer('id_riesgo')->unique();
            $table->integer('probabilidad')->nullable();
            $table->text('comentarios')->nullable();
        });

        Schema::create('rie_consecuencias_riesgo', function (Blueprint $table) {
            $table->integer('id_riesgo')->primary();
            $table->integer('id_consecuencia')->unique();
            $table->integer('impacto')->nullable();
            $table->text('comentarios')->nullable();
        });

        Schema::create('sg_estados', function (Blueprint $table) {
            $table->integer('tipo_estado')->nullable();
            $table->integer('identificador')->nullable();
            $table->string('nombre', 30)->nullable();
        });

        Schema::create('sg_tipos_estado', function (Blueprint $table) {
            $table->integer('identificador')->nullable();
            $table->string('nombre', 30)->nullable();
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
        Schema::dropIfExists('par_consecuencias');
        Schema::dropIfExists('par_fases');
        Schema::dropIfExists('rg_departamentos');
        Schema::dropIfExists('par_actividades');
        Schema::dropIfExists('rg_ciudades');
        Schema::dropIfExists('ter_terceros');
        Schema::dropIfExists('pro_proyectos');
        Schema::dropIfExists('rie_riesgos');
        Schema::dropIfExists('rie_seguimiento');
        Schema::dropIfExists('ter_canales_contacto');
        Schema::dropIfExists('ter_cruce_terceros');
        Schema::dropIfExists('rie_causas_riesgo');
        Schema::dropIfExists('rie_consecuencias_riesgo');
        Schema::dropIfExists('sg_estados');
        Schema::dropIfExists('sg_tipos_estado');
    }
}
