@extends('layouts.main');
@section('contenido')
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Vinos</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalAgregarVino">
            <i class="fas fa-glass-cheers fa-sm text-white-50"></i> Agregar Vino</a>
      </div>

      <div class="row">
        @if ($message= Session::get('ErrorInsert'))
            <div class="col-12 alert alert-danger alert-dismissable fade show" role="alert">
                  <h5>Errores: </h5>
                  <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                  @endforeach
                  </ul>
            </div>
        @endif
    </div>

        <!-- Modal -->
<div class="modal fade" id="modalAgregarVino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Vino</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/admon"method="post">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Nombre del Vino" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="CPE" placeholder="Clasificacion por edad" value="{{old('CPE')}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="CPC" placeholder="Clasificacion por color" value="{{old('CPC')}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="CPA" placeholder="Clasificacion por azucar" value="{{old('CPA')}}">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="CPGA" placeholder="Clasificacion por grado alcoholico" value="{{old('CPGA')}}">
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
      </div>
    </div>
  </div>


@endsection
