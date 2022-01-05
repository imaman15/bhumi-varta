<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_brands', function (Blueprint $table) {
            $table->id();
            $table->double('longitude', 17, 14);
            $table->double('latitude', 16, 15);
            $table->char('brand');
            $table->timestamp('time');
            $table->integer('user_count');
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
        Schema::dropIfExists('users_brands');
    }
}
