<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\TicketType;
use App\Models\Train;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();


        return view('tickets/index', ['tickets' => $tickets]);
    }

    
    public function create()
    {
        $ticketTypes = TicketType::all();
        $trains = Train::all();
        return view('tickets.create', ['ticketTypes' => $ticketTypes, 'trains' => $trains]);
        
    }

    
    public function store(Request $request)
    {
        
        $ticket = new Ticket();
        $ticket->date = $request->input('date');
        $ticket->price = $request->input('price');
        $ticket->ticket_type_id = $request->input('ticket_type_id');
        $ticket->train_id = $request->input('train_id');
        $ticket->save();

        return redirect('/tickets');
    }

    
    public function show(string $id)
    {
        //show
        $ticket = Ticket::findOrFail($id);

        return view('tickets/show', ['ticket' => $ticket]);
    }

   
    public function edit(string $id)
    {
        
        $ticket = Ticket::findOrFail($id);
        $trains = Train::all();

        return view('tickets/edit', ['ticket' => $ticket, 'ticketTypes' => TicketType::all(), 'trains' => $trains]);
    }

    
    public function update(Request $request, string $id)
    {
        $ticket = Ticket::find($id);
        $ticket->date = $request->input('date');
        $ticket->price = $request->input('price');
        $ticket->ticket_type_id = $request->input('ticket_type_id');
        $ticket->train_id = $request->input('train_id');
        $ticket->save();


        return redirect()->route('tickets.index');
    }

   
    public function destroy(string $id)
    {
        
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('tickets.index');
    }
}