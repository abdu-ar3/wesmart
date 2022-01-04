<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigitalReadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digital_reads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('author');
            $table->string('publisher');
            $table->string('cover');
            $table->integer('views')->default(0)->unsigned();
            $table->enum('status', ['PUBLISH', 'DRAFT']);
            $table->integer('created_by');
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
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
        Schema::dropIfExists('digital_reads');
    }
}
