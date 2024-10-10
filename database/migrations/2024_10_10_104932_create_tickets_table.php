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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_number');
            $table->enum('ticket_status', ['waiting', 'in_progress', 'completed', 'canceled']);
            $table->unsignedBigInteger('counter_id');
            $table->unsignedBigInteger('service_queue_id');
            $table->foreign('counter_id')->references('id')->on('counters')->cascadeOnDelete();
            $table->foreign('service_queue_id')->references('id')->on('service_queues')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
