@extends('layouts.app')

@section('content')

    <div class="container" style="margin-top: 90px">
        {{-- <h6>البيئة الافتراضية لتنمية مهارات إنتاج الفيديو الرقمي التفاعلي</h6> --}}
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">

                <div class="card">
                    <div class="card-block" style="background-color: #e4e5e6">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ __('مرحبا بك يا ') }}{{ Auth::user()->name }} {{ __('في بيئة التعلم الافتراضية لتنمية مهارات ') }}

                        </div>
                    @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
