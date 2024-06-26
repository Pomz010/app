<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('software_assets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('version');
            $table->string('license');
            $table->date('exp_date')->nullable();
            $table->string('developer');
            $table->string('category');
            $table->date('date_installed');
            $table->string('serial_#');
            $table->date('purchase_date');
            $table->string('vendor');
            $table->string('product_key');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('software_assets');
    }
};
