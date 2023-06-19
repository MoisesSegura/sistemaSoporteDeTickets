<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TicketController extends Controller
{
 
    public function index(): view
    {
        $tickets = Ticket::latest()->paginate(5);

        return view('index', ['tickets'=> $tickets]);
    }


    public function create(): view
    {
        return view('create');
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'priority' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
    
        $ticket = new Ticket();
        $ticket->title = $request->input('title');
        $ticket->status = $request->input('status');
        $ticket->priority = $request->input('priority');
        $ticket->category = $request->input('category');
        $ticket->description = $request->input('description');
        $ticket->file = $request->input('file');
        
        // Obtén el valor seleccionado en el campo de etiquetas
        $tags = $request->input('tags');
        $tagString = implode(',', $tags);
        $ticket->tag = $tagString;
    
        $ticket->save();
    
        return redirect()->route('tickets.index')->with('success', 'Nuevo Ticket creado exitosamente');

       
        // $request->validate(['title'=>'required', 'status'=>'required', 
        // 'priority'=>'required','category'=>'required','description'=>'required']); 

        // ticket::create($request->all());

        // return redirect()->route('tickets.index')->with('success','Nuevo Ticket creado exitosamente' );
    }

  
    public function show(ticket $ticket)
    {
        //
    }

 
    public function edit(ticket $ticket)
    {
        return view('edit', ['ticket' => $ticket]);
    }

 
    public function update(Request $request, ticket $ticket): RedirectResponse
    {
        //
    }

 
    public function destroy(ticket $ticket)
    {
        //
    }
}
