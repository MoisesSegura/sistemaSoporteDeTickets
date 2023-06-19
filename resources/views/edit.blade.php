@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>Detalles de Ticket</h2>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Título:</strong>
            <input type="text" name="title" class="form-control" readonly value="{{$ticket->title}}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Estado:</strong>
            <input type="text" name="status" class="form-control" readonly value="{{$ticket->status}}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Prioridad:</strong>
            <input type="text" name="priority" class="form-control" readonly value="{{$ticket->priority}}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Categoría:</strong>
            <input type="text" name="category" class="form-control" readonly value="{{$ticket->category}}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Descripción:</strong>
            <textarea class="form-control" style="height:150px" name="description" readonly>{{$ticket->description}}</textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Comentario de agente:</strong>
            <textarea class="form-control" style="height:150px" name="agent_comment" readonly placeholder="Comentario de agente..."></textarea>
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Archivo adjunto:</strong>
            <input type="text" id="fileName" class="form-control" readonly value="{{$ticket->file}}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
        <div class="form-group">
            <strong>Tags:</strong>
            <input type="text" id="fileName" class="form-control" readonly value="{{$ticket->tag}}">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
        <a href="{{route('tickets.index')}}" class="btn btn-primary createAndBack-btn">Volver</a>
    </div>



  
    </div>


</div>

<style>
.createAndBack-btn {
    background-color: #A7A7A9;
    color: black;
    border: none;
}

.createAndBack-btn:hover {
    background-color: #CCCCCC;
}

.select-file-btn {
    background-color: #9C51B5;
    border: none;
}

.select-file-btn:hover {
    background-color: #B569D4;
    /* Otros estilos cuando se hace hover */
}
</style>
@endsection
