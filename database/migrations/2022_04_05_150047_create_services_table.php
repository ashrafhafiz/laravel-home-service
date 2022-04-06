<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tagline');
            $table->unsignedBigInteger('service_category_id')->nullable();
            $table->decimal('price');
            $table->decimal('discount')->nullable();
            $table->enum('discount_type', ['fixed', 'percentage'])->nullable();
            $table->string('image')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('description')->nullable();
            $table->longText('inclusion')->nullable();
            $table->longText('exclusion')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('service_category_id')
                ->references('id')
                ->on('service_categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
