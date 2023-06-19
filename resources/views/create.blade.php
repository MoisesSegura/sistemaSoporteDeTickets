@extends('layouts.base')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Ticket</h2>
        </div>
       
    </div>


    @if ($errors->any())
        <div class="alert alert-danger mt-2">
            <strong>Error!</strong> por favor complete los siguientes espacios:<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('tickets.store')}}" method="POST">
        @csrf 
        <div class="row">   
            <div class="col-xs-12 col-sm-12 col-md-3 mt-2">
                <div class="form-group">
                    <strong>Titulo:</strong>
                    <input type="text" name="title" class="form-control" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 mt-2">
                <div class="form-group">
                    <strong>Estado (inicial):</strong>
                    <select name="status" class="form-select" id="">
                        <option value="">-- Elige el estado --</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="En progreso">En progreso</option>
                        <option value="Completada">Completada</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 mt-2">
                <div class="form-group">
                    <strong>Prioridad (inicial):</strong>
                    <select name="priority" class="form-select" id="">
                        <option value="">-- Elige la prioridad --</option>
                        <option value="Baja">Baja</option>
                        <option value="Media">Media</option>
                        <option value="Alta">Alta</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 mt-2">
                <div class="form-group">
                    <strong>Categoria (inicial):</strong>
                    <select name="category" class="form-select" id="">
                        <option value="">-- Elige la categoria--</option>
                        <option value="Bugs">Bugs</option>
                        <option value="Aplicacion">Aplicación</option>
                        <option value="Seguridad">Seguridad</option>
                        <option value="Consultas generales">Consultas generales</option>
                        
                    </select>
                </div>
            </div>
            

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Descripción:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción..."></textarea>
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
                    <input type="file" id="fileInput" class="form-control-file" name="attachment" style="display: none;">
                    <button class="btn btn-primary select-file-btn" onclick="document.getElementById('fileInput').click()">Seleccionar Archivo</button>
                    <input type="text" id="fileName" class="form-control" readonly>
                </div>
            </div>

            <script>
                // Mostrar el nombre del archivo seleccionado
                document.getElementById('fileButton').addEventListener('click', function(event) {
                   event.preventDefault(); // Detener la acción predeterminada del evento de clic en el botón
                   document.getElementById('fileInput').click();
               });
           
               document.getElementById('fileInput').addEventListener('change', function(event) {
                   var fileName = event.target.files[0].name;
                   document.getElementById('fileName').value = fileName;
               });
           </script>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary createAndBack-btn">Crear</button>
                <a href="{{route('tickets.index')}}" class="btn btn-primary createAndBack-btn">Volver</a>
   
            </div>

            
        </div>
    </form>

    
</div>

<style>

.createAndBack-btn {
    background-color: #A7A7A9;
    color: black;
    border:none;
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