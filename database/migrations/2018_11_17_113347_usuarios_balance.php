<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuariosBalance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/* Usuario_Balance(
usbal_id INT PRIMARY KEY AUTO_INCREMENT ,
usbal_usuario_id VARCHAR(15),
usbal_monto DECIMAL(18,8),
usbal_fecha DATETIME, #fecha y hora con milisegundos
usbal_tipoMov VARCHAR(3),
FOREIGN KEY (usbal_usuario_id) REFERENCES Usuario(usu_id),
FOREIGN KEY (usbal_tipoMov) REFERENCES Tipo_Movimiento(tmov_id) */
        Schema::create('usuario_Balance', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->decimal("monto", 12, 2);
            $table->dateTime("fecha");
            $table->integer('id_movimiento')->unsigned();
            $table->foreign('id_movimiento')->references('id')->on('tipo_movimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
