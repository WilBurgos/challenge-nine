<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodigoPostalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codigo_postal', function (Blueprint $table) {
            // $table->increments('id');
            $table->integer('d_codigo')->nullable();
            $table->string('d_asenta')->nullable();
            $table->string('d_tipo_asenta')->nullable();
            $table->string('d_mnpio')->nullable();
            $table->string('d_estado')->nullable();
            $table->string('d_ciudad')->nullable();
            $table->integer('d_cp')->nullable();
            $table->integer('c_estado')->nullable();
            $table->integer('c_oficina')->nullable();
            $table->string('c_cp')->nullable();
            $table->integer('c_tipo_asenta')->nullable();
            $table->integer('c_mnpio')->nullable();
            $table->integer('id_asenta_cpcons')->nullable();
            $table->string('d_zona')->nullable();
            $table->integer('c_cve_ciudad')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codigo_postal');
    }
}
