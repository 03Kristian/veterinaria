@extends('layouts.base')

@section('contenido')

<div class="" id="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                {{-- <th scope="col">foto</th> --}}
                <th scope="col">nombre</th>
                <th scope="col"><i class="bi bi-nut"></i></th>
                {{-- <th scope="col"></th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach($mascota as $m)
                <tr>
                    <th scope="row">{{$m->id}}</th>
                    {{-- <td><button  class="rounded-circle btn btn-light">{{$m->foto}}</button></td> --}}
                    {{-- <td class="rounded-circle btn btn-block">{{$m->foto}}</td> --}}
                    <td>{{$m->nombre }}<br>{{$m->genero}}</td>
                    {{-- <td>{{$m->genero}}</td> --}}

                    <td class="td">
                        <a class="rounded-circle btn btn-warning" href="/mascota/{{$m->id}}/edit"><i class="bi bi-pen-fill"></i></a>
                    {{-- </td>
                    <td class="td"> --}}
                      <form action="{{route('mascota.destroy',$m)}}" method="POST">
                        @csrf
                        @method ('DELETE')
                        <button class="rounded-circle btn btn-danger" ><i class="bi bi-trash-fill"></i></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    
</div>

@endsection