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
        Schema::create('reservation_shop', function (Blueprint $table) {
            $table->foreignId('reservation_id')->constrained('reservations');
            $table->foreignId('shop_id')->constrained('shops');
            $table->primary([ 'reservation_id','shop_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_shop');
    }
};
