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
        Schema::create('students', function (Blueprint $table) {
            $table->id();//this auto increments, type big int
            $table->timestamps();//creates columns created_at and updated_at, can be null
            $table->string('StudentID', 8)->unique();
            $table->string('FirstName',100);
            $table->string('LastName',100);
            $table->string('MiddleName',100)->nullable();
            $table->string('Age',3)->nullable();
            $table->bigInteger('course_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
