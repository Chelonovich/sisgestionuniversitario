@extends('adminlte::page')

@section('content_header')
    <h1><b>Personal administrativos/Registro de un nuevo personal Administrativo</b></h1>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lleno los datos del formulario</h3>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{url('admin/administrativos/create')}}" method="post">
                        @csrf
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                            <label for="">Nombre del rol</label><b> (*)</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                </div>
                                <select name="rol" id="" class="form-control">
                                    <option value="">Seleccione un rol...</option>
                                    @foreach($roles as $rol)
                                        <option value="{{$rol->name}}">{{$rol->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('rol')
                                <small style="color: red">{{$message}}</small>
                            @enderror
                          </div>

                        </div>

                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombres</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nombres" id="nombres" value="{{ old('nombres') }}"placeholder="Ingrese nombres" required>
                                    </div>
                                    @error('nombres')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Apellidos</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-friends"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ old('apellidos') }}"placeholder="Ingrese los apellidos..." required>
                                    </div>
                                    @error('apellidos')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>

                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Cedula de Identidad</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="ci" id="ci" value="{{ old('ci') }}"placeholder="Ingrese CI..." required>
                                    </div>
                                    @error('ci')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Fecha de Nacimiento</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"placeholder="Ingrese fecha de nacimiento..." required>
                                    </div>
                                    @error('fecha_nacimiento')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Telefono</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}"placeholder="Ingrese telefono..." required>
                                    </div>
                                    @error('telefono')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Email</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}"placeholder="Ingrese email..." required>
                                    </div>
                                    @error('email')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Profesion</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="profesion" id="telprofesionefono" value="{{ old('profesion') }}"placeholder="Ingrese profesion..." required>
                                    </div>
                                    @error('profesion')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Direccion</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}"placeholder="Ingrese direccion..." required>
                                    </div>
                                    @error('direccion')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                    </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{url('/admin/administrativos')}}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
