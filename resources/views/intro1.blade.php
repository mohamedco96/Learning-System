@extends('layouts.quiz')

@section('content')
    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">

                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-check"></i> مقياس مستوى الدافعية
                    </div>
                    <div class="card-block">
                         تعليمات مقياس مستوى الدافعية <br>
                         -	اقرأ كل عبارة من العبارات التالية بدقة وعناية ، وضع علامة (* ) إمام الاختيار المناسب لك  <br>
                        * تأكد من الإجابة عن جميع العبارات ، وضع علامة واحدة فقط أمام كل منها  <br>
                        * لاحظ أنه لا توجد إجابة صحيحة وأخرى خاطئة ، فالاستبانة ليست اختبارًا  <br>
                        * لا يوجد وقت محدد للإجابة، وعليك ألاَّ تستغرق وقتاً طويلاً في عبارة واحدة <br>
                        </p>
                        <a href="./quiz1" class="btn btn-primary">بدء المقياس</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/col-->

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
