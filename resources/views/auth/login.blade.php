@extends('layouts.app')
@section('title')
Login - ReKrie
@endsection

@section('keywords')
Login in ReKrie, signin

@endsection

@section('description')
Login  and  book your  products

@endsection


@section('content')
 
<div align="center" class="container-fluid my-3">

    <div class="col-md-2">
        <a href="/">
            <img src="{{asset('assets/img/Logo-Square.webp')}}" class="img-fluid px-2 py-2" style="width:200px;">
        </a>
    </div>
   <h5 class="my-2" >Login</h5>
    <div class="row justify-content-center">
        <div class="col-md-7">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row justify-content-center">

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  placeholder="{{ __('Seu e-mail') }}" autocomplete="email"  autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  placeholder="{{ __('Sua senha') }}" autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row ">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-check" align="left">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembrar-me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0 justify-content-center">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btaobtn btaobtn-dark px-5 py-2">
                                        {{ __('Logar') }}
                                    </button>
                                        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link col-md-12" href="{{ route('password.request') }}">
                                                {{ __('Esqueceu sua senha?') }}
                                            </a>
                                        @endif
                                 <strong>Não possui uma conta? <br>Então <a href="register" ><u>Registre-se!</u></a></strong>
                                </div>
                                 <div class="col-md-12 ">
                                   <p class="my-2"> 
                                          <a class="black-text" href="/">
                                               <i class="fas fa-arrow-left"></i>
                                           <u>Voltar à Loja</u>
                                           </a>
                                   </p> 
                                 </div>
                            </div>
                        </form>

        </div>
    </div>
</div>
@endsection
