@extends('layouts.app')

@section('content')
<h1 class="display-4" id="heading">البيئة الافتراضية لتنمية مهارات إنتاج الفيديو الرقمي التفاعلي</h1>

<div class="card" style="background-color:; width:500px; height: 140px; padding-top: 10px;" id="card">
    <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ Auth::user()->name }} {{ __('مرحبا بك يا ') }}
        </div>
    </div>
@endsection
