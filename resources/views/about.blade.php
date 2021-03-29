
@guest
<?php
header('Location:/home');
exit();
?>
@endguest

@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 50px">
        <div class="row justify-content-center">
            <header style="text-align: center;"><span style="font-family: 'Open Sans';"><strong><span
                            style="color: rgb(71, 85, 119); font-size: 26px;">
                            تهدف البيئة إلى تنمية مهارات إنتاج الفيديو الرقمى التفاعلى  &nbsp;
                        </span></strong></span></header>
            <header style="text-align: center;"><span style="font-family: 'Open Sans';"><strong><span
                            style="color: rgb(71, 85, 119); font-size: 26px;"> لدى طلاب الفرقة الثالثة تكنولوجيا التعليم بكلية التربية جامعة دمياط و مستوى الدافعية للإنجاز
                            </span></strong></span><span style="font-size: 26px;"><span
                        style="color: rgb(71, 85, 119);"><strong><span 
                              تنقسم البيئة إلى 6 موديولات عليك أولا اتباع تعليمات البية   style="font-family: 'Open Sans';">
                                </span></strong></span></span></header>
            <hr>
            <p style="text-align: center;"><span
                    style="font-size: 26px; font-family: 'Open Sans';"><strong><span
                            style="color: rgb(71, 85, 119);">إعداد الباحثة&nbsp;</span></strong></span></p>
            <p style="text-align: center;"><span
                    style="font-size: 26px; font-family: 'Open Sans';"><strong><span
                            style="color: rgb(71, 85, 119);">دينا جويدة</span></strong></span></p>
            {{-- <hr>
            <p style="text-align: center;"><span style="font-size: 26px; color: rgb(226, 80, 65);"><strong><span
                            style="font-family: 'Open Sans';"> إشراف:</span></strong></span></p>
            <hr> --}}
            {{-- <p><br></p> --}}
        </div>

        {{-- <div class="row">
            <div class="col-sm-6">
                <p style="text-align: center;"><span
                        style="font-family: 'Open Sans'; font-size: 24px; color: rgb(71, 85, 119);"><strong>أ.
                            د
                            / ربيع عبدالعظيم رمود</strong></span></p>
                <p style="text-align: center;"><strong><span style="color: rgb(71, 85, 119);"><span
                                style="font-size: 24px;"><span style="font-family: 'Open Sans';">استاذ
                                    ورئيس قسم تكنولوجيا التعليم&nbsp;</span></span></span></strong></p>
                <p style="text-align: center;"><span
                        style="font-family: 'Open Sans'; font-size: 24px; color: rgb(71, 85, 119);"><strong>بكلية
                            التربية جامعة دمياط</strong></span></p>
            </div>
            <div class="col-sm-6">
                <p style="text-align: center;"><span
                        style="font-family: 'Open Sans'; font-size: 24px; color: rgb(71, 85, 119);"><strong>أ.
                            م. د
                            / ناهد فهمي عبد المقصود&nbsp;</strong></span></p>
                <p style="text-align: center;"><strong><span style="color: rgb(71, 85, 119);"><span
                                style="font-size: 24px;"><span style="font-family: 'Open Sans';">استاذ
                                    تكنولوجيا التعليم المساعد بكلية&nbsp;</span></span></span></strong></p>
                <p style="text-align: center;"><span
                        style="font-family: 'Open Sans'; font-size: 24px; color: rgb(71, 85, 119);"><strong>&nbsp;التربية
                            جامعة دمياط</strong></span></p>
            </div>
        </div>
        <hr> --}}
        
        <p style="text-align: center">
            <a href="./intro1" class="btn btn-primary" style="margin-bottom: 30px"> مقياس مستوى الدافعية</a><br>
            <a href="./intro2" class="btn btn-primary">الإختبار القبلي</a>
        </p>
        </div>



        
    {{-- Automatic Support --}}

    <div id="automatic">
        <button type="button" class="btn btn-primary support" data-toggle="modal" data-target="#exampleModal">
            إضغط هنا للدعم
        </button>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">الدعم</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="support" method="get">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example1" class="form-control" name="name"
                            placeholder="الإسم" required />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form4Example2" class="form-control" name="email"
                            placeholder="البريد الإلكتروني" required />
                    </div>

                     <!-- Subject input -->
                     <div class="form-outline mb-4">
                        <input type="text" id="form4Example2" class="form-control" name="Subject"
                            placeholder="العنوان" required />
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="form4Example3" rows="4" name="message"
                            placeholder="رسالتك" required></textarea>
                    </div>

                    <!-- Submit button -->
                    <div class="text-center">
                        {{-- <button type="submit" class="btn btn-primary btn-block mb-4">ارسل</button> --}}
                        <input type="submit" value="ارسل" name="submit" class="btn btn-sm btn-primary"/>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection


