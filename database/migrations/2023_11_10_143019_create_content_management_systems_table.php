<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentManagementSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_management_systems', function (Blueprint $table) {
            $table->id();

            $table->string("img")->nullable();

            $table->integer("product_id")->nullable();

            $table->string("header")->nullable();
            $table->string("description")->nullable();

            $table->enum("place", ["HEADER", "PRODUCT", "REVIEW", "QUALITY", "INSTAGRAM"]);
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
        Schema::dropIfExists('content_management_systems');
    }
}
