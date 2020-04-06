@extends('layouts.main');
@section('contenido')
 <!-- Page Heading -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#modalAgregarUsuario">
        <i class="fas fa-user fa-sm text-white-50"></i> Agregar usuario</a>

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
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/user"method="post">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pass1" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="pass2" placeholder="Confirmar password">
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

@section('scripts')
    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
