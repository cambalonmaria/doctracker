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
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('created_id');
            $table->string('transaction_code');
            $table->string('fullname');
            $table->string('contact_number');
            $table->string('email_address')->nullable()->unique();
            $table->string('address')->nullable();
            $table->integer('from_id');
            $table->string('title');
            $table->string('destination')->nullable();
            $table->string('receiver', 50)->nullable();
            $table->text('purpose')->nullable();
            $table->text('short_description')->nullable();
            $table->timestamp('last_visited_at')->nullable();
            $table->string('status', 20);
            $table->timestamps();
            $table->integer('notif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
