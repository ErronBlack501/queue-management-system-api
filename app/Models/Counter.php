<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use HasFactory;

    protected $fillable = [
        'counter_name',
        'counter_status',
        'user_id',
        'service_queue_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceQueue()
    {
        return $this->belongsTo(ServiceQueue::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
