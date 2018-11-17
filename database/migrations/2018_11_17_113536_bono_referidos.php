<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BonoReferidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
CREATE TABLE Bono_Referidos(
bono_id INT PRIMARY KEY AUTO_INCREMENT,
bono_fechaInicio DATE,
bono_monto_nivel1 DECIMAL (18,8),
bono_monto_nivel2 DECIMAL(18,8)
*/
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('costo',11,2);  
            $table->decimal('bono_nivel_1',11,2);  
            $table->decimal('bono_nivel_2',11,2);  
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
