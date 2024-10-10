<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

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
