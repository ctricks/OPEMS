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
        Schema::create('raw_attendances', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->text('department_name')->nullable();
            $table->text('designation_name')->nullable();
            $table->string('employee_id', 10);
            $table->date('select_date');
            $table->string('month');
            $table->time('check_in')->nullable();
            $table->string('late')->nullable();
            $table->time('check_out')->nullable();
            $table->integer('duration_minutes')->nullable(); // Moved duration_minutes column
            $table->string('overtime')->nullable();
            $table->string('DataSource')->nullable(); // Data source of login entry
            $table->boolean('isApproved')->default(true); // if Approved Official Logs
            $table->string('Remarks')->nullable(); // Additional Notes
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
        Schema::dropIfExists('raw_attendances');
    }
};
