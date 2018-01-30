<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('pages');
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('page_id');
            $table->string('page_name', 25);
            $table->string('page_type', 15);
            $table->string('slug', 50)->unique();
            $table->string('status', 10)->default('inactive');
            $table->text('content')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('modified_by')->nullable();
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
        Schema::dropIfExists('pages');
    }
}
