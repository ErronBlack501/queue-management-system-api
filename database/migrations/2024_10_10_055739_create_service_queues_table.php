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
        Schema::create('service_queues', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->string('service_description');
            $table->time('estimated_duration', precision: 0)->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('queue_name');
            $table->integer('ticket_count')->default(0);
            $table->enum('queue_status', ['open', 'closed', 'suspended'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_queues');
    }
};
