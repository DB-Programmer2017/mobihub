@extends('layout/home-2')

{{-- Title Website --}}
@section('title', 'MOBIHUB | login')
{{-- Link CSS --}}
<style>
body{ background: linear-gradient(to right,#7AB6B6 50%, #E5CFAA 50%); }
.form-horizontal{
    background-color: #fff;
    font-family: 'Arimo', sans-serif;
    text-align: center;
    padding: 50px 30px 50px;
    box-shadow: 12px 12px 0 0 rgba(0,0,0,0.3);
    margin-top: 10%;
    margin-bottom: 20%;
}
.form-horizontal .heading{
    color: #555;
    font-size: 30px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin: 0 0 50px 0;
}
.form-horizontal .form-group{
    margin: 0 auto 30px;
    position: relative;
}
.form-horizontal .form-group:nth-last-child(2){ margin-bottom: 20px; }
.form-horizontal .form-group:last-child{ margin: 0; }
.form-horizontal .form-group>i{
    color: #999;
    transform: translateY(-50%);
    position: absolute;
    left: 5px;
    top: 50%;
}
.form-horizontal .form-control{
    color: #7AB6B6;
    background-color: #fff;
    font-size: 17px;
    letter-spacing: 1px;
    height: 40px;
    padding: 5px 10px 2px 25px;
    box-shadow: 0 0 0 0 transparent;
    border: none;
    border-bottom: 1px solid rgba(0,0,0,0.1);
    border-radius: 0;
    display: inline-block;
}
.form-control::placeholder{
    color: rgba(0,0,0,0.2);
    font-size: 16px;
}
.form-horizontal .form-control:focus{
    border-bottom: 1px solid #7AB6B6;
    box-shadow: none;
}
.form-horizontal .btn{
    color: #7AB6B6;
    background-color: #EDF6F5;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    border-radius: 5px;
    width: 50%;
    height: 45px;
    padding: 7px 30px;
    margin: 0 auto 25px;
    border: none;
    display: block;
    position: relative;
    transition: all 0.3s ease;
    margin-top: 20px;
}
.form-horizontal .btn:focus,
.form-horizontal .btn:hover{
    color: #fff;
    background-color: #7AB6B6;
}
.form-horizontal .btn:before,
.form-horizontal .btn:after{
    content: '';
    background-color: #7AB6B6;
    height: 50%;
    width: 2px;
    position: absolute;
    left: 0;
    bottom: 0;
    z-index: 1;
    transition: all 0.3s;
}
.form-horizontal .btn:after{
    bottom: auto;
    top: 0;
    left: auto;
    right: 0;
}
.form-horizontal .btn:hover:before,
.form-horizontal .btn:hover:after{
    height: 100%;
    width: 50%;
    opacity: 0;
}
.form-horizontal .create_account{
    color: #D6BC8B;
    font-size: 16px;
    font-weight: 600;
    display: inline-block;
}
.form-horizontal .create_account:hover{
    color: #7AB6B6;
    text-decoration: none;
}
</style>
@section('link')

@endsection

@section('content')


<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="heading">Login</div>
                    <div class="form-group">
                        <i class="fa fa-user"></i><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock"></i><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <span class="forgot-pass">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </span>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default">{{ __('Login') }}</button>
                        <span>Don't have an account? <a href="{{ route('register') }}">Sign up</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- <section class="login">
    <div class="form-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <div class="form-container">
                        <div class="form-icon">
                            <i class="fa fa-user-edit"></i>
                        </div>
                        <h3 class="title">User Login</h3>
                        
                        <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                        @csrf

                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <span class="forgot-pass">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </span>

                            <button type="submit" class="btn signin">
                                {{ __('Login') }}
                            </button>

                        </form>
                        <span class="user-signup">Don't Have an Account? <a href="{{ route('register') }}">Create Now !</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection

