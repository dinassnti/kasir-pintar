<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiskonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskon', function (Blueprint $table) {
            $table->id('id_diskon'); // Primary key
            $table->string('nama_diskon', 50);
            $table->decimal('persentase', 5, 2)->nullable(); // Diskon dalam persen (0-100%)
            $table->decimal('nominal', 15, 2)->nullable(); // Nominal diskon
            $table->date('tanggal_mulai'); // Tanggal mulai diskon
            $table->date('tanggal_berakhir'); // Tanggal berakhir diskon
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diskon');
    }
}
