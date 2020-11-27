@extends('layouts.quiz')

@section('content')
    <div class="card text-center" style="margin-top: 100px">
        <div class="card-header">
            المقياس
        </div>
        <div class="card-body">
            <div class="quizContainer container-fluid well well-lg">
                <div id="quiz1" class="text-center">
                    <h3>KGCAS - Javascript FDP 2018</h3>
                    <center><img class="img-responsive" height="180" width="180" src="http://res.cloudinary.com/dwjej2tbp/image/upload/v1523002021/KGCAS_SK_eyehy9.jpg"></center>
                    <h4 style="color:#FF0000;position:absolute;left:70%;top:30%;" align="center" ><span id="iTimeShow">Time Remaining: </span><br/><span id='timer' style="font-size:25px;"></span></h4>
                    <h2>jQuery Quiz</h2>
                </div>
                
                <div class="question"></div>
                <ul class="choiceList"></ul>
                <div class="quizMessage"></div>
                <div class="result"></div>
                <button class="preButton">Previous Question</button>
                <button class="nextButton">Next Question</button>
            </div>
        </div>
    </div>
@endsection
