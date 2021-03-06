<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrescriptionIllness extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('prescription_illness', function (Blueprint $table) {
            $table->id();

            $table->foreignId('prescription_id')
            ->references('id')->on('prescription')
                  ->constrained()
                  ->onDelete('cascade');

            $table->foreignId('illness_id')
                  ->constrained()
                  ->onDelete('cascade');
            $table->string('duration')->nullable();
          
            
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
        Schema::dropIfExists('prescription_illness');
    }
}
