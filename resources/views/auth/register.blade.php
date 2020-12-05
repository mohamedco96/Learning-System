@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 m-x-auto pull-xs-none vamiddle">
            <div class="card">
                <form method="POST" action="{{ route('register') }}" dir="rtl">
                    @csrf
        
                <div class="card-block p-a-2">
                    <h1>تسجيل</h1>
                    <p class="text-muted">تسجيل حساب جديد</p>
                    <div class="input-group m-b-1">
                        <span class="input-group-addon"><i class="icon-user"></i>
                        </span>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="الإسم">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="input-group m-b-1">
                        <span class="input-group-addon"><i class="icon-user"></i>
                        </span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الإلكتروني">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group m-b-1">
                        <span class="input-group-addon">@</span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="كلمة المرور">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    </div>
                    <div class="input-group m-b-1">
                        <span class="input-group-addon"><i class="icon-lock"></i>
                        </span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="إعادة كلمة المرور">
                    </div>
            

                        <button type="submit" class="btn btn-block btn-success">
                            {{ __('Register') }}
                        </button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
