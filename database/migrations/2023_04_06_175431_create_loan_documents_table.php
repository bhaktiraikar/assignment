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
        Schema::create('loan_documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('applicant_id'); 
            $table->double('loan_amount', 8, 2);
            $table->double('tenure', 8, 2);
            $table->text('income_details');
            $table->timestamps();
            $table->foreign('applicant_id')
                    ->references('id')
                    ->on('applicant_details')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_documents');
    }
};
