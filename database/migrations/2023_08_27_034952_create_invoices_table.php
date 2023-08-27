<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer("customer_id");
            $table->integer("amount");
            $table->enum("status", ["paid", "unpaid", "void"]); //  (Nombre de columna, [Valores permitidos])
            $table->dateTime("billed_date");
            $table->dateTime("paid_date")->nullable(); //Corta: null, como base todas las columnas llevan "not null"

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
