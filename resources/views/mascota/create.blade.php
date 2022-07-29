@extends('layouts.base')

@section('contenido')
    <form action="{{route('mascota.store')}}" method="post">
        @csrf
        <div class="form-group row pt-1">
            <label for="nombre" class="col-4 col-form-label"></label> 
            <div class="col-8">
              <input type="text" id="nombre" name="nombre" placeholder="Nombre" type="text" class="rounded-pill form-control">
            </div>
        </div>

        <div class="form-group row pt-1">
            <label class="col-4"></label> 
            <div class="col-8">
              <select id="raza " name="raza" class="rounded-pill form-select custom-select " required="required">
                <option value="..">Seleccione Raza....</option>
                @foreach ($raza as $r)
                    <option value="{{$r->id}}">{{$r->nombre_raza}}</option>
                @endforeach
                
              </select>
            </div>
          </div> 

          <div class="form-group row pt-1">
            <label class="col-4"></label> 
            <div class="col-8">
              <select id="categoria" name="categoria" class="rounded-pill form-select form-select custom-select " required="required">
                <option value="..">Seleccione Categoria....</option>
                <option value="perro">perro</option>
                <option value="gato">gato</option>
              </select>
            </div>
          </div> 

        <div class="form-group row pt-1">
                <label for="nombre" class="col-4 col-form-label"></label> 
                <div class="col-8">
                  <input id="foto" name="foto" placeholder="Subir foto" type="text" class="rounded-pill form-control">
                </div>
        </div>

        <div class="form-group row pt-1">
            <label class="col-4"></label> 
            <div class="col-8">
              <select id="genero" name="genero" class="rounded-pill form-select form-select custom-select " required="required">
                <option value="..">Seleccione Genero....</option>
                
                <option value="macho">Macho</option>
                <option value="hembra">Hembra</option>

              </select>
            </div>
          </div> 

              <button name="submit" type="submit" class="btn btn-success">Guardar</button>
            
          
    </form>
@endsection