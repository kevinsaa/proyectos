@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="color: #1a80d6 ; font-weight: 800">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ape" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="ape" type="text" class="form-control{{ $errors->has('ape') ? ' is-invalid' : '' }}" name="ape" value="{{ old('ape') }}" required autofocus>

                                @if ($errors->has('ape'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ape') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tdoc" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Tipo de documento') }}</label>

                            <div class="col-md-6">
                                <input type="Radio" name="tdoc" value="DNI" required>&nbsp;Dni &nbsp;
                                <input type="Radio" name="tdoc" value="TI" required>&nbsp;TI &nbsp;
                                <input type="Radio" name="tdoc" value="PASAPORTE" required>&nbsp;Pasaporte &nbsp;
                                @if ($errors->has('tdoc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tdoc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ndoc" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Numero documento') }}</label>

                            <div class="col-md-6">
                                <input id="ndoc" type="text" class="form-control{{ $errors->has('ndoc') ? ' is-invalid' : '' }}" name="ndoc" value="{{ old('ndoc') }}" required autofocus>

                                @if ($errors->has('ndoc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ndoc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gen" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                            <input type="Radio" name="gen" value="FEMENINO" required>&nbsp;Femenino &nbsp;
                                <input type="Radio" name="gen" value="MASCULINO" required>&nbsp;Masculino &nbsp;
                                @if ($errors->has('gen'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gen') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prog" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Programa') }}</label>

                            <div class="col-md-6">
                            <input id="prog" type="date" class="form-control{{ $errors->has('prog') ? ' is-invalid' : '' }}" name="prog" value="{{ old('prog') }}" required autofocus>

                               
                                @if ($errors->has('prog'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('prog') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                        
                        <div class="form-group row">
                            <label for="per" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Periodo') }}</label>

                            <div class="col-md-6">
                                <input id="per" type="text" class="form-control{{ $errors->has('per') ? ' is-invalid' : '' }}" name="per" value="{{ old('per') }}" required autofocus>

                                @if ($errors->has('per'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('per') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jor" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Jornada') }}</label>

                            <div class="col-md-6">
                                <input id="jor" type="text" class="form-control{{ $errors->has('jor') ? ' is-invalid' : '' }}" name="jor" value="{{ old('jor') }}" required autofocus>

                                @if ($errors->has('jor'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jor') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sed" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Sede') }}</label>

                            <div class="col-md-6">
                                <input id="sed" type="text" class="form-control{{ $errors->has('sed') ? ' is-invalid' : '' }}" name="sed" value="{{ old('sed') }}" required autofocus>

                                @if ($errors->has('sed'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sed') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sem" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Semestre') }}</label>

                            <div class="col-md-6">
                                <input id="sem" type="text" class="form-control{{ $errors->has('sem') ? ' is-invalid' : '' }}" name="sem" value="{{ old('sem') }}" required autofocus>

                                @if ($errors->has('sem'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sem') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Correo electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: #1a80d6 ; font-weight: 800">{{ __('Confirmar Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #1a80d6 ; border:none">
                                    {{ __('Registrase') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
