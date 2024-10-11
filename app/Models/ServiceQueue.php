<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceQueue extends Model
{
    use HasFactory;

    protected  $fillable = [
        'service_name',
        'service_description',
        'estimated_duration',
        'is_active',
        'queue_name',
        'queue_status'
    ];

    public function Tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function counters()
    {
        return $this->hasMany(Counter::class);
    }
}
