<?php

namespace Database\Seeders;

use App\Models\Counter;
use App\Models\ServiceQueue;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceQueueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceQueue::factory()->has(Counter::factory()->count(1))->create([
            'service_name' => 'Facturation',
            'queue_name' => 'Facturation-queue',
        ]);
        ServiceQueue::factory()->has(Counter::factory()->count(1))->create([
            'service_name' => 'Retrait',
            'queue_name' => 'Retrait-queue',
        ]);
    }
}
