@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
            <div class="card-group ">
                <div class="card p-a-2">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="card-block">
                        <h1>تسجيل الدخول</h1>
                        <div class="input-group m-b-1">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <!-- <input type="text" class="form-control en" placeholder="نام کاربری یا ایمیل"> -->
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="البريد الإلكتروني ">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-group m-b-2">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <!-- <input type="password" class="form-control en" placeholder="رمز ورود"> -->
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="كلمة المرور">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group m-b-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                <label class="form-check-label" for="remember">
                                    {{ __('تذكرني') }}
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                              

                                    <button type="submit" class="btn btn-primary p-x-2">
                                        {{ __('تسجيل الدخول') }}
                                    </button>
                
                                    @if (Route::has('password.request'))
                                        {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a> --}}
                                    @endif
                            </div>
                   
                        </div>
                    </div>
                </form>
                </div>
                <div class="card card-inverse card-primary p-y-3" style="width:44%">
                    <div class="card-block text-xs-center">
                        <div>
                            <h2>ثبت نام</h2>
                            <p>اگر در سامانه عضو نیستید به راحتی می توانید همین الان نام نویسی کنید.</p>
                            <button type="button" class="btn btn-primary active m-t-1">تسجيل حساب جديد</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
