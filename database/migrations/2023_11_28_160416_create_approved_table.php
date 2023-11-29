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
        Schema::create('approved', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('transaction_id');
            $table->integer('from_id');
            $table->integer('to_id');
            $table->integer('notif');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approved');
    }
};
