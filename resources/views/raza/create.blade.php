@extends('layouts.base')

@section('contenido')
    <form action="{{route('raza.store')}}" method="post">
        @csrf
        <div class="form-group row pt-1">
            <label for="nombre" class="col-4 col-form-label"></label> 
            <div class="col-8">
              <input type="text" id="nombre_raza" name="nombre_raza" placeholder="Nombre" type="text" class="rounded-pill form-control">
            </div>
        </div>

        <button name="submit" type="submit" class="btn btn-success">Guardar</button>

    </form>
@endsection