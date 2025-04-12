@extends('adminlte::page')

@section('content_header')
    <h1><b>Personal administrativos/Datos del personal Administrativo</b></h1>
    <hr>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos registrados</h3>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                        @csrf
                        <div class="row">
                          <div class="col-md-3">
                            <div class="form-group">
                            <label for="">Nombre del rol</label><b> (*)</b>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-check"></i></span>
                                </div>
                                <input type="text" class="form-control" name="rol_id" id="rol_id" value="{{ $administrativo->usuario->roles->pluck('name')->implode(', ') }}" readonly>
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
                                        <input type="text" class="form-control" name="nombres" id="nombres" value="{{ old('nombres',$administrativo->nombres) }}"placeholder="Ingrese nombres" disabled>
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
                                        <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ old('apellidos',$administrativo->apellidos) }}"placeholder="Ingrese los apellidos..." disabled>
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
                                        <input type="text" class="form-control" name="ci" id="ci" value="{{ old('ci',$administrativo->ci) }}"placeholder="Ingrese CI..." disabled>
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
                                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento',$administrativo->fecha_nacimiento) }}"placeholder="Ingrese fecha de nacimiento..." disabled>
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
                                        <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono',$administrativo->telefono) }}"placeholder="Ingrese telefono..." disabled>
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
                                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email',$administrativo->usuario->email) }}"placeholder="Ingrese email..." disabled>
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
                                        <input type="text" class="form-control" name="profesion" id="telprofesionefono" value="{{ old('profesion',$administrativo->profesion) }}"placeholder="Ingrese profesion..." disabled>
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
                                        <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion',$administrativo->direccion) }}"placeholder="Ingrese direccion..." disabled>
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
                                    <a href="{{url('/admin/administrativos')}}" class="btn btn-secondary">Volver</a>

                                </div>
                            </div>
                        </div>

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
