<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
           $table->id();
           $table->bigintUnsigned('category_id');
           $table->varchar('first_name', 255);
           $table->varchar('last_name', 255);
           $table->bigInteger('gender');
           $table->varchar('email', 255);
           $table->varchar('tel', 255);
           $table->varchar('address', 255);
           $table->varchar('building', 255);
           $table->string('detail');
           $table->timestamp('created_at')->useCurrent()->nullable();
           $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
