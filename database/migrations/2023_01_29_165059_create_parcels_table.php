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
        Schema::create('parcels', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('biker_id')->nullable();
            $table->integer('status_id')->default(1);
            $table->string('pick_up_address');
            $table->string('drop_off_address');
            $table->timestamp('pick_up_at')->nullable();
            $table->timestamp('drop_off_at')->nullable();
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
        Schema::dropIfExists('parcels');
    }
};
