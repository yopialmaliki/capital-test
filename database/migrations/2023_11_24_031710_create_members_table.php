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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->enum('gender', ['male', 'female']);
			$table->bigInteger('identity_number');
			$table->string('phone_number');
			$table->string('email');
			$table->string('city');
			$table->text('refferal_code')->nullable();

            $table->bigInteger('user_id')->nullable()->unsigned();

            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
