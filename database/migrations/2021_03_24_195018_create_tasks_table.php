<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('customer_id')
                ->index()
                ->comment('Клиент');

            $table->date('task_date')
                ->index()
                ->comment('Дата постановки задачи');

            $table->unsignedBigInteger('task_status_id')
                ->index()
                ->comment('Статус задачи');

            $table->string('name', 255)
                ->comment('Наименование задачи');

            $table->text('description')
                ->nullable()
                ->comment('Подробное описание задачи');

            $table->unsignedInteger('pre_cost')
                ->nullable()
                ->comment('Предварительная стоимость услуги');

            $table->unsignedInteger('cost')
                ->nullable()
                ->comment('Окончательная стоимость услуги');

            $table->dateTime('start_date')
                ->nullable()
                ->index()
                ->comment('Дата начала работ');

            $table->dateTime('deadline')
                ->nullable()
                ->index()
                ->comment('Крайняя дата выполнения задачи');

            $table->dateTime('completion_date')
                ->nullable()
                ->index()
                ->comment('Дата фактического выполнения работ');

            $table->unsignedInteger('payments_amount')
                ->nullable()
                ->comment('Сумма платежей');

            $table->integer('debt')
                ->nullable()
                ->index()
                ->comment('Сумма задолженности');

            $table->timestamps();


            $table->foreign('customer_id')
                ->references('id')
                ->on('customers');

            $table->foreign('task_status_id')
                ->references('id')
                ->on('task_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
