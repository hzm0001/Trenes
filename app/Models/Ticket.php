<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ticket extends Model
{
    use HasFactory;
    public function ticketType()
    {
        return $this->belongsTo(TicketType::class);
    }
    public function train()
    {
        return $this->belongsTo(Train::class);
    }
}