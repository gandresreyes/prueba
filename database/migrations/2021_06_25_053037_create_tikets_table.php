<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\tiket;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('comentario');
            $table->enum('status',[tiket::activo, tiket::preceso, tiket::finalizado])->default(tiket::activo);

            $table->unsignedBigInteger('historia_id');
            $table->foreign('historia_id')->references('id')->on('historias')->onDelete('cascade');
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
        Schema::dropIfExists('tikets');
    }
}
