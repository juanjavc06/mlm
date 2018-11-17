<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuariosReferidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*
CREATE TABLE Usuarios_Referidos(
usuref_id INT PRIMARY KEY AUTO_INCREMENT,
usuref_usuario_referido VARCHAR(15),
usuref_codigoReferido_padre VARCHAR(20),
 FOREIGN KEY (usuref_usuario_referido) REFERENCES Usuario(usu_id),
 FOREIGN KEY (usuref_codigoReferido_padre) REFERENCES Usuario(usu_codigoReferido)
);
*/
        Schema::create('usuarios_referidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_referido')->unsigned();
            $table->integer('codigo_referido2')->unsigned();
            $table->foreign('codigo_referido')->references('id')->on('users');
            $table->foreign('codigo_referido2')->references('id')->on('users');
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
