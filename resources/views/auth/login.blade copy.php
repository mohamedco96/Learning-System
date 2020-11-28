@extends('layouts.app')

@section('content')
<h1 class="display-4" id="heading">البيئة الافتراضية لتنمية مهارات إنتاج الفيديو الرقمي التفاعلي</h1>

<div class="card" style="background-color: #a9d8e6; width:300px; height: 300px; padding-top: 30px" id="card">
    {{-- <div class="card-header">{{ __('Login') }}</div> --}}

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row" style="margin-left: 25px">
                {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                <div class="col-md-15">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="البريد الإلكتروني ">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row" style="margin-left: 25px">
                {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                <div class="col-md-15">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="كلمة المرور">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row" dir="rtl">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('تذكرني') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0" dir="rtl">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('تسجيل الدخول') }}
                    </button>

                    @if (Route::has('password.request'))
                        {{-- <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a> --}}
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
