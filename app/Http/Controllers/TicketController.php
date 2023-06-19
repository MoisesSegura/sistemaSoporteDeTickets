<?php

namespace App\Http\Controllers;

use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $tickets = Ticket::latest()->paginate(5);

        return view('index', ['tickets'=> $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): view
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(['title'=>'required', 'status'=>'required', 
        'priority'=>'required','category'=>'required','description'=>'required']); 

        ticket::create($request->all());

        return redirect()->route('tickets.index')->with('success','Nuevo Ticket creado exitosamente' );
    }

    /**
     * Display the specified resource.
     */
    public function show(ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ticket $ticket)
    {
        return view('edit', ['ticket' => $ticket]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ticket $ticket): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ticket $ticket)
    {
        //
    }
}
