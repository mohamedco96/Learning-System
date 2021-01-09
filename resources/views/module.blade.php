@php
$users = DB::table('users')->where('id', Auth::user()->id)->get();

foreach ($users as $user) {
// echo $user->email;
}
@endphp

@extends('layouts.main')
@section('content')
    <div class="container-fluid" style="margin-top: 50px">
        <div class="animated fadeIn">
            <div class="row">
                {{-- الموديول الأول --}}
                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            الموديول الأول
                            @if ($user->module1 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            أساسيات التعامل مع الفيديو الرقمى التفاعلى
                        </div>
                        <div class="card-footer">
                            @if ($user->module1 === '1')
                                <a href="./module1" class="btn btn-outline-primary btn-block"><i
                                        class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @else
                                <a href="./module1" class="btn btn-outline-primary btn-block"
                                    style="pointer-events: none"><i class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- نهاية الموديول الأول --}}
                <!--/col-->

                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            الموديول الثاني
                            @if ($user->module2 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            أساسيات التعامل مع الفيديو الرقمى التفاعلى

                        </div>
                        <div class="card-footer">
                            @if ($user->module2 === '1')
                                <a href="./module2" class="btn btn-outline-primary btn-block"><i
                                        class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @else
                                <a href="./module2" class="btn btn-outline-primary btn-block"
                                    style="pointer-events: none"><i class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            الموديول الثالث
                            @if ($user->module3 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            أساسيات التعامل مع الفيديو الرقمى التفاعلى

                        </div>
                        <div class="card-footer">
                            @if ($user->module3 === '1')
                                <a href="./module3" class="btn btn-outline-primary btn-block"><i
                                        class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @else
                                <a href="./module3" class="btn btn-outline-primary btn-block"
                                    style="pointer-events: none"><i class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/col-->
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            الموديول الرابع
                            @if ($user->module4 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            أساسيات التعامل مع الفيديو الرقمى التفاعلى

                        </div>
                        <div class="card-footer">
                            @if ($user->module4 === '1')
                                <a href="./module4" class="btn btn-outline-primary btn-block"><i
                                        class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @else
                                <a href="./module4" class="btn btn-outline-primary btn-block"
                                    style="pointer-events: none"><i class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            الموديول الخامس
                            @if ($user->module5 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            أساسيات التعامل مع الفيديو الرقمى التفاعلى

                        </div>
                        <div class="card-footer">
                            @if ($user->module5 === '1')
                                <a href="./module5" class="btn btn-outline-primary btn-block"><i
                                        class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @else
                                <a href="./module5" class="btn btn-outline-primary btn-block"
                                    style="pointer-events: none"><i class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-6 col-md-4">
                    <div class="card">
                        <div class="card-header">
                            الموديول السادس
                            @if ($user->module6 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            أساسيات التعامل مع الفيديو الرقمى التفاعلى

                        </div>
                        <div class="card-footer">
                            @if ($user->module6 === '1')
                                <a href="./module6" class="btn btn-outline-primary btn-block"><i
                                        class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @else
                                <a href="./module6" class="btn btn-outline-primary btn-block"
                                    style="pointer-events: none"><i class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
    </div>
@endsection
