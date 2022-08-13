<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('type');
        });

        DB::table('products')->insert([
            ['type' => 'Placa De Video'],
            ['type' => 'Celular'],
            ['type' => 'Placa Mae'],
            ['type' => 'Desktop'],
            ['type' => 'Video game'],
            ['type' => 'Notebook'],
            ['type' => 'Servidor'],
            ['type' => 'Outro'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
