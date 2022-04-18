<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->unsignedBigInteger('id_destinasi');
=======
            $table->string('id_destinasi');
>>>>>>> db7e6bf3c903a3fcce0789cd391201af94a4e3f9
            $table->string('komen');
            $table->timestamps();

            //Foreign Key
            $table->foreign('id_destinasi')->references('id_destinasi')->on('destinasis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentars');
    }
};
