<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvocesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoces', function (Blueprint $table) {
            $table->id();
            $table->integer('c_carrera');
            $table->integer('c_producto');
            $table->foreignId('company_id')->constrained('companies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('driver_id')->constrained('drivers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('invoces');
    }
}
