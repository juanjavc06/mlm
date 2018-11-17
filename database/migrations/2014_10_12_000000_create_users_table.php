<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*
CREATE TABLE Usuario(
usu_id VARCHAR(15) PRIMARY KEY ,
usu_nombre VARCHAR(200) NOT NULL,
usu_password VARCHAR(80) NOT NULL,
usu_email VARCHAR(50) NOT NULL,
usu_telefono VARCHAR(50)NOT NULL,
usu_pais VARCHAR(100),
usu_ciudad VARCHAR(50),
usu_codigoReferido VARCHAR(20) NOT NULL,
usu_codigoReferido_Padre VARCHAR(20)
);
*/
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('telefono');
            $table->string('pais');
            $table->string('ciudad');
            $table->integer("codigo_referido1");
            $table->integer("codigo_referido2");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
