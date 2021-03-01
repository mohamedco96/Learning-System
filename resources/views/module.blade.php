@php
$users = DB::table('users')
    ->where('id', Auth::user()->id)
    ->get();

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
                    <div class="card" style="height: 200px">
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
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module1" class="btn btn-outline-primary  " style="border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>

                            @else
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module1" class="btn btn-outline-primary"
                                        style="pointer-events: none;border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                {{-- نهاية الموديول الأول --}}
                <!--/col-->

                <div class="col-6 col-md-4">
                    <div class="card" style="height: 200px">
                        <div class="card-header">
                            الموديول الثاني
                            @if ($user->module2 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            برامج إنتاج الفيديو الرقمى التفاعلى

                        </div>
                        <div class="card-footer">
                            @if ($user->module2 === '1')
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module2" class="btn btn-outline-primary  " style="border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @else
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module2" class="btn btn-outline-primary"
                                        style="pointer-events: none;border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-6 col-md-4">
                    <div class="card" style="height: 200px">
                        <div class="card-header">
                            الموديول الثالث
                            @if ($user->module3 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                        مهارات إنتاج فيديو كرتونى ثنائى البعد 

                        </div>
                        <div class="card-footer">
                            @if ($user->module3 === '1')
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module3" class="btn btn-outline-primary  " style="border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @else
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module3" class="btn btn-outline-primary"
                                        style="pointer-events: none;border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/col-->
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-6 col-md-4">
                    <div class="card" style="height: 200px">
                        <div class="card-header">
                            الموديول الرابع
                            @if ($user->module4 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            تحريك الشخصيات والعناصر ب Cartoon Animator

                        </div>
                        <div class="card-footer">
                            @if ($user->module4 === '1')
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module4" class="btn btn-outline-primary  " style="border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @else
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module4" class="btn btn-outline-primary"
                                        style="pointer-events: none;border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-6 col-md-4">
                    <div class="card" style="height: 200px">
                        <div class="card-header">
                            الموديول الخامس
                            @if ($user->module5 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            إضافة المؤثرات الصوتية والانتقالية بين المشاهد

                        </div>
                        <div class="card-footer">
                            @if ($user->module5 === '1')
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module5" class="btn btn-outline-primary  " style="border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @else
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module5" class="btn btn-outline-primary"
                                        style="pointer-events: none;border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
                <!--/col-->

                <div class="col-6 col-md-4">
                    <div class="card" style="height: 200px">
                        <div class="card-header">
                            الموديول السادس
                            @if ($user->module6 === '1')
                                <span class="tag tag-success pull-left">متاح</span>
                            @endif
                        </div>
                        <div class="card-block">
                            إضافة العناصر التفاعلية للفيديو ببرنامج Camtasia 

                        </div>
                        <div class="card-footer">
                            @if ($user->module6 === '1')
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module6" class="btn btn-outline-primary  " style="border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
                            @else
                                <p style="text-align: center; margin-top: 15px">
                                    <a href="./module6" class="btn btn-outline-primary"
                                        style="pointer-events: none;border-radius: 15%;"><i
                                            class="fa fa-star"></i>&nbsp;ابدأ الآن</a>
                                </p>
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
