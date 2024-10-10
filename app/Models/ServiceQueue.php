<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceQueue extends Model
{
    use HasFactory;

    public function Tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
