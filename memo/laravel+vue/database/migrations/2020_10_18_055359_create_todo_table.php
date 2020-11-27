<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 50);
            $table->date('begin_date');
            $table->date('end_date');
            $table->decimal('man_hour', 5, 2)->default(0);
            $table->string('note', 200)->nullable();
            $table->boolean('done')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo');
    }
}
