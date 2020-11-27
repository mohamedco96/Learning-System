@extends('layouts.quiz')

@section('content')
    <div class="card text-center" style="margin-top: 100px">
        <div class="card-header">
            المقياس
        </div>
        <div class="card-body">
            <h5 class="card-title">
                أولا عزيزي الطالب / الطالبة عليك إجراء مقياس مستوى الدافعية
            </h5>
            <p class="card-text">
                تعليمات المقياس <br>
                عزيزي الطالب عليك قراءة العبارات جيدا قبل الشروع في الإجابة <br>
                * الالتزام بالوقت المحدد لزمن القياس <br>
                * اختيار بديل واحد من البدائل <br>
                * الضغط على زر التالي للإنتقال <br>
            </p>
            <a href="./quiz2" class="btn btn-primary">بدء الإختبار القبلي</a>
        </div>
    </div>
@endsection
