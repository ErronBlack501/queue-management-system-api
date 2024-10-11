<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_number',
        'ticket_status',
        'counter_id',
        'service_queue_id',
    ];

    public function counter()
    {
        return $this->belongsTo(Counter::class);
    }

    public function serviceQueue()
    {
        return $this->belongsTo(ServiceQueue::class);
    }

    public function ticketHistories()
    {
        return $this->hasMany(TicketHistory::class);
    }
}
