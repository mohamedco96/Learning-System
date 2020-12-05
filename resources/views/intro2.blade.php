@extends('layouts.quiz')

@section('content')
    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">

                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-check"></i> المقياس
                    </div>
                    <div class="card-block">
                        تعليمات المقياس <br>
                        عزيزي الطالب عليك قراءة العبارات جيدا قبل الشروع في الإجابة <br>
                        * الالتزام بالوقت المحدد لزمن القياس <br>
                        * اختيار بديل واحد من البدائل <br>
                        * الضغط على زر التالي للإنتقال <br>
                        </p>
                        <a href="./quiz2" class="btn btn-primary">بدء المقياس</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/col-->
@endsection
