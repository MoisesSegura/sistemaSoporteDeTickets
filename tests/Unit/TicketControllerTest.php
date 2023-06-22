<?php

use Tests\TestCase;
use App\Models\Ticket;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TicketControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testCrearTicket()
    {
        $response = $this->post(route('tickets.store'), [
            'title' => 'Título del ticket',
            'status' => 'Pendiente',
            'priority' => 'Alta',
            'category' => 'Bugs',
            'description' => 'Descripción del ticket',
            'tags' => ['Feedback', 'Incidencia']
        ]);

        $response->assertStatus(302); // Verificar que se redirige correctamente

        $this->assertDatabaseHas('tickets', [
            'title' => 'Título del ticket',
            'status' => 'Pendiente',
            'priority' => 'Alta',
            'category' => 'Bugs',
            'description' => 'Descripción del ticket',
            'tag' => 'Feedback,Incidencia'
        ]);
    }
    
    
    public function testMostrarDetalles()
    {
        // Crear un ticket de ejemplo
        $ticket = Ticket::create([
            'title' => 'Título del ticket',
            'status' => 'Pendiente',
            'priority' => 'Alta',
            'category' => 'Bugs',
            'description' => 'Descripción del ticket'
        ]);

        // Realizar una solicitud GET a la ruta de edición del ticket
        $response = $this->get(route('tickets.edit', $ticket));

        $response->assertStatus(200); // Verificar que la solicitud sea exitosa

        $response->assertViewHas('ticket', function ($viewTicket) use ($ticket) {
            // Verificar que los datos del ticket se muestren correctamente en la vista
            return $viewTicket->id === $ticket->id &&
                   $viewTicket->title === $ticket->title &&
                   $viewTicket->status === $ticket->status &&
                   $viewTicket->priority === $ticket->priority &&
                   $viewTicket->category === $ticket->category &&
                   $viewTicket->description === $ticket->description;
        });
    }


}
