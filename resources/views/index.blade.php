@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
  
        <div>
            <a href="{{route('tickets.create')}}" class="btn btn-primary custom-btn-create">Crear Ticket</a>
        </div>
    </div>

    @if (Session::get('success'))
        <div class="alert alert-success mt-2" id="success-alert">
            <strong>{{Session::get('success')}}<br>
        </div>

        <script>
            setTimeout(function() {
                var element = document.getElementById("success-alert");
                element.style.transition = "opacity 1s";
                element.style.opacity = "0";
                setTimeout(function() {
                    element.remove();
                }, 1000); // tiempo en milisegundos para eliminar el elemento
            }, 3000); // tiempo en milisegundos para desaparecer el mensaje
        </script>
    @endif



    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-white header-row">
                <th>#</th>
                <th>Título</th>
                <th>Estado</th>
                <th>Prioridad</th>
                <th>Categoría</th>
            </tr>
    
            @foreach($tickets as $ticket)
    
            <tr>
                <td class="fw-bold text-black">{{$ticket->id}}</td>
                <td class="fw-bold text-black"><a href="{{route('tickets.edit', $ticket)}}" class="black-link">{{$ticket->title}}</a></td>

                <td>
                    @if($ticket->status == 'Pendiente')
                        <span class="badge bg-warning fs-6 text-black">{{$ticket->status}}</span>
                    @elseif($ticket->status == 'En progreso')
                        <span class="badge bg-primary fs-6 text-black">{{$ticket->status}}</span>
                    @elseif($ticket->status == 'Completada')
                        <span class="badge bg-success fs-6 text-black">{{$ticket->status}}</span>
                    @endif
                </td>
                <td class="fw-bold text-black">{{$ticket->priority}}</td>
                <td class="fw-bold text-black">{{$ticket->category}}</td>
        
            </tr>
    
            @endforeach
    
        </table>
    
        {{$tickets->links()}}
    </div>

    <div class="logo-container">
        <img src="{{ asset('images/chat.png') }}" class="logo">
    </div>
    
</div>

<style>
    .header-row {
        background-color: #9C51B5;
        color: white;
    }

    .custom-btn-create {
        background-color: #A7A7A9;
        border-color: #A7A7A9;
        margin-top: 1rem;
        color: black;
    }

    .custom-btn-create:hover {
        background-color: #CCCCCC;
        border-color: #CCCCCC;
    }

    .logo-container {
    position: fixed;
    bottom: 1rem;
    left: 95%;
    z-index: 0;
    
}

.logo {
    width: 3rem;
    height: 3rem;
    
}

.black-link {
        color: black;
    }

</style>

@endsection