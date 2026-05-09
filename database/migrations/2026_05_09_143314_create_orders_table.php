<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('contact_type', 10);
            $table->string('contact_value', 100);
            $table->string('work_type', 20);
            $table->string('university', 200)->nullable();
            $table->date('deadline')->nullable();
            $table->text('comment')->nullable();
            $table->string('file_path', 500)->nullable();
            $table->string('status', 20)->default('new');
            $table->string('ip', 45)->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
