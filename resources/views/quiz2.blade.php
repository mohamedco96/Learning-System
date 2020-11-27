@extends('layouts.quiz')

@section('content')
    <div class="card text-center" style="margin-top: 100px">
        <div class="card-header" >
            أسئلة المقياس
            <div id="iTimeShow">
                <span id="iTimeShow">الوقت المتبقى</span>
                <span id='timer' style="font-size:25px;"></span></h4>
            </div>
    
        </div>
        <div class="card-body">
            <div class="quizContainer container-fluid well well-lg">


                <div class="question" id="question"></div>
                <ul class="list-group choiceList"></ul>
                <div class="alert alert-danger quizMessage" role="alert"></div>
                <div class="alert alert-info result" role="alert" style="display: none"></div>

                <div class="col text-center" id="but">
                    <button type="button" class="btn btn-outline-secondary preButton">السابق</button>
                    <button type="button" class="btn btn-outline-primary nextButton">التالي</button>
                </div>

            </div>
            <div class="col text-center" id="quiz2" style="display: none">
                <a href="./intro1" class="btn btn-primary">دراسة الموديول</a>
            </div>
        </div>
    </div>
@endsection
