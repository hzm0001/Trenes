<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;

class TicketTypeController extends Controller
{
    
    public function index()
    {
        
        $ticket_types = TicketType::all();
        return view('ticket_types.index', ['ticket_types' => $ticket_types]);
    }

   
    public function create()
    {
        return view('ticket_types.create');

    }

    
    public function store(Request $request)
    {

        $ticket_type = new TicketType();
        $ticket_type->type = $request->input('type');
        $ticket_type->save();

        return redirect()->route('ticket_types.index');
    }

    
    public function show(string $id)
    {
       
        $ticket_type = TicketType::find($id);
        return view('ticket_types.show', ['ticket_type' => $ticket_type]);

    }

   
    public function edit(string $id)
    {
       
        $ticket_type = TicketType::find($id);
        return view('ticket_types.edit', ['ticket_type' => $ticket_type]);
    }

    
    public function update(Request $request, string $id)
    {
        //update
        $ticket_type = TicketType::find($id);
        $ticket_type->name = $request->name;
        $ticket_type->save();

        return redirect()->route('ticket_types.index');
    }

   
    public function destroy(string $id)
    {
      
        $ticket_type = TicketType::find($id);
        $ticket_type->delete();

        return redirect()->route('ticket_types.index');
    }
}