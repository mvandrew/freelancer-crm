<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('customer_id')
                ->index()
                ->comment('Клиент');

            $table->unsignedBigInteger('task_id')
                ->index()
                ->comment('Задача');

            $table->unsignedBigInteger('payment_type_id')
                ->index()
                ->comment('Способ платежа');

            $table->date('payment_date')
                ->index()
                ->comment('Дата платежа');

            $table->unsignedInteger('amount')
                ->comment('Сумма платежа');

            $table->text('note')
                ->nullable()
                ->comment('Комметарий к платежу');


            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

            $table->foreign('task_id')
                ->references('id')
                ->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
