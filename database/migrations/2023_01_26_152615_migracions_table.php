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
            $table->integer('id_tipo_categoria');
            $table->string('nombre', 255)->nullable();
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->timestamps();
        });

        Schema::create('par_tipos_fase', function (Blueprint $table) {
            $table->increments('id_fase');
            $table->string('descripcion', 50)->nullable();
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->timestamps();
        });

        Schema::create('par_categorias', function (Blueprint $table) {
            $table->integer('id_categoria')->primary();
            $table->integer('id_categoria_padre')->nullable();
            $table->string('descripcion', 50);
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->integer('id_tipo_categoria');
            $table->timestamps();
        });

        Schema::create('rg_paises', function (Blueprint $table) {
            $table->integer('codigo')->primary();
            $table->string('nombre', 30);
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->timestamps();
        });

        Schema::create('rie_tratamiento_riesgo', function (Blueprint $table) {
            $table->integer('id_tratamiento')->primary();
            $table->integer('id_decision');
            $table->string('plan_de_accion', 1000)->nullable();
            $table->integer('id_responsable');
            $table->integer('fecha_implementacion');
            $table->integer('id_indicador');
            $table->integer('id_periodicidad_medicion');
            $table->integer('id_documento_relacionado');
            $table->integer('id_documentado');
            $table->integer('id_funcionamiento');
            $table->integer('id_perioricidad');
            $table->integer('id_es_obligatorio');
            $table->integer('id_naturaleza');
            $table->integer('id_cubrimiento');
            $table->timestamps();
        });

        Schema::create('par_causas', function (Blueprint $table) {
            $table->integer('id_causa')->primary();
            $table->string('descripcion', 500);
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->integer('id_categoria')->nullable();
            $table->timestamps();
        });

        Schema::create('par_consecuencias', function (Blueprint $table) {
            $table->integer('id_consecuencia')->primary();
            $table->string('descripcion', 500);
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->integer('id_categoria')->nullable();
            $table->timestamps();
        });

        Schema::create('par_fases', function (Blueprint $table) {
            $table->integer('id_fase')->primary();
            $table->text('descripcion')->nullable();
            $table->integer('id_fase_padre');
            $table->integer('id_tipo_fase');
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->timestamps();
        });

        Schema::create('rg_departamentos', function (Blueprint $table) {
            $table->integer('codigo_pais')->primary();
            $table->integer('codigo');
            $table->string('nombre', 30);
            $table->integer('tipo_estado');
            $table->integer('estado')->primary();
            $table->timestamps();
        });

        Schema::create('par_actividades', function (Blueprint $table) {
            $table->integer('id_actividad')->primary();
            $table->integer('id_proceso');
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->text('descripcion');
            $table->timestamps();
        });

        Schema::create('rg_ciudades', function (Blueprint $table) {
            $table->integer('codigo_pais')->primary();
            $table->integer('codigo_departamento')->primary();
            $table->integer('codigo')->primary();
            $table->string('nombre', 100);
            $table->string('es_capital', 1)->nullable();
            $table->integer('tipo_estado')->nullable();
            $table->integer('estado')->nullable();
            $table->timestamps();
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
            $table->timestamps();
        });

        Schema::create('pro_proyectos', function (Blueprint $table) {
            $table->integer('id_proyecto')->primary();
            $table->string('nombre', 500);
            $table->integer('id_contratista');
            $table->integer('id_contratante');
            $table->integer('id_interventoria');
            $table->string('objeto_contraactual', 500);
            $table->integer('id_etapa_proyecto');
            $table->integer('id_actividad');
            $table->integer('id_responsable');
            $table->integer('id_formato');
            $table->string('archivos', 500)->nullable();
            $table->integer('id_tipo_contratacion')->nullable();
            $table->timestamps();
        });

        Schema::create('rie_riesgos', function (Blueprint $table) {
            $table->integer('id_riesgo')->primary();
            $table->string('descripcion', 50);
            $table->integer('probabilidad');
            $table->integer('impacto');
            $table->integer('id_categoria')->nullable();
            $table->integer('id_fase');
            $table->integer('tipo_estado');
            $table->integer('estado');
            $table->integer('id_actividad')->nullable();
            $table->integer('id_proyecto')->nullable();
            $table->string('nombre_corto', 5);
            $table->date('fecha_identificacion');
            $table->integer('id_tipo_asignacion');
            $table->string('factores_riesgo', 500)->nullable();
            $table->timestamps();
        });

        Schema::create('rie_seguimiento', function (Blueprint $table) {
            $table->integer('id_seguimiento')->primary();
            $table->integer('id_periodo');
            $table->text('descripcion_seguimiento');
            $table->integer('id_riesgo');
            $table->integer('probabilidad');
            $table->integer('impacto');
            $table->text('lecciones_aprendidas')->nullable();
            $table->integer('id_afectividad_tratamiento');
            $table->integer('id_clasificacion');
            $table->integer('id_tolerabilidad')->nullable();
            $table->text('decisiones')->nullable();
            $table->text('resultado_indicador');
            $table->text('factores_riesgo');
            $table->text('medidas');
            $table->timestamps();
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
            $table->timestamps();
        });

        Schema::create('ter_cruce_terceros', function (Blueprint $table) {
            $table->integer('id_tercero_principal')->primary();
            $table->integer('id_tercero_secundario')->primary();
            $table->integer('consecutivo')->primary();
            $table->integer('tipo_estado');
            $table->date('fecha_inicial');
            $table->date('fecha_vigencia')->nullable();
            $table->integer('vdom_tipo_relacion');
            $table->integer('estado');
            $table->timestamps();
        });

        Schema::create('rie_causas_riesgo', function (Blueprint $table) {
            $table->integer('id_causa')->primary();
            $table->integer('id_riesgo')->primary();
            $table->integer('probabilidad');
            $table->text('comentarios');
            $table->timestamps();
        });

        Schema::create('rie_consecuencias_riesgo', function (Blueprint $table) {
            $table->integer('id_riesgo')->primary();
            $table->integer('id_consecuencia')->primary();
            $table->integer('impacto');
            $table->string('comentarios', 500);
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
    }
}
