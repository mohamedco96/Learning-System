@extends('layouts.quiz')
@section('content')
    <div>
        <?php
        $servername = 'localhost';
        $username = 'interactive';
        $password = 'g]JX&~id.LBW';
        $dbname = 'interactive';

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }
        $q1 = $_GET['q1'];
        $q2 = $_GET['q2'];
        $q3 = $_GET['q3'];
        $q4 = $_GET['q4'];
        $q5 = $_GET['q5'];
        $q6 = $_GET['q6'];
        $q7 = $_GET['q7'];
        $q8 = $_GET['q8'];
        $q9 = $_GET['q9'];
        $q10 = $_GET['q10'];
        $q11 = $_GET['q11'];
        $q12 = $_GET['q12'];
        $q13 = $_GET['q13'];
        $q14 = $_GET['q14'];
        $q15 = $_GET['q15'];
        $q16 = $_GET['q16'];
        $q17 = $_GET['q17'];
        $q18 = $_GET['q18'];
        $q19 = $_GET['q19'];
        $q20 = $_GET['q20'];
        $q21 = $_GET['q21'];
        $q22 = $_GET['q22'];
        $q23 = $_GET['q23'];
        $q24 = $_GET['q24'];
        $q25 = $_GET['q25'];
        $q26 = $_GET['q26'];
        $q27 = $_GET['q27'];
        $q28 = $_GET['q28'];

        $id = $_GET['id'];
        if (isset($_GET['submit'])) {
            $q1 = $_GET['q1'];
            $q2 = $_GET['q2'];
            $q3 = $_GET['q3'];
            $q4 = $_GET['q4'];
            $q5 = $_GET['q5'];
            $q6 = $_GET['q6'];
            $q7 = $_GET['q7'];
            $q8 = $_GET['q8'];
            $q9 = $_GET['q9'];
            $q10 = $_GET['q10'];
            $q11 = $_GET['q11'];
            $q12 = $_GET['q12'];
            $q13 = $_GET['q13'];
            $q14 = $_GET['q14'];
            $q15 = $_GET['q15'];
            $q16 = $_GET['q16'];
            $q17 = $_GET['q17'];
            $q18 = $_GET['q18'];
            $q19 = $_GET['q19'];
            $q20 = $_GET['q20'];
            $q21 = $_GET['q21'];
            $q22 = $_GET['q22'];
            $q23 = $_GET['q23'];
            $q24 = $_GET['q24'];
            $q25 = $_GET['q25'];
            $q26 = $_GET['q26'];
            $q27 = $_GET['q27'];
            $q28 = $_GET['q28'];

            $id = $_GET['id'];
        }

        $score=0;

        switch ($q1) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }

        switch ($q2) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q3) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q4) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q5) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q6) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q7) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q8) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q9) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q10) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q11) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q12) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q13) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q14) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q15) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q16) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q17) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q18) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q19) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q20) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q21) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q22) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q23) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q24) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q25) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q26) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q27) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }
        switch ($q28) {
            case "1":
                $score +=1;
                break;
            case "2":
                $score +=2;
                break;
            case "3":
                $score +=3;
                break;
            case "4":
                $score +=4;
                break;
            case "5":
                $score +=5;
                break;
        }


        $percentage = ($score / 140) * 100;

        $Sql = "UPDATE `users` SET `alm8yas2Score` = $score, `alm8yas2percentage` = $percentage WHERE `users`.`id` = $id ";
        $scoreResult1 = $conn->query($Sql);


        $conn->close();
        ?>

    </div>

    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                <div class="card" style="margin-top: 60px">
                    <div class="card-block">
                        <h4 style="text-align: center; color: brown">درجاتك هي</h4><br>
                        <h4 style="text-align: center">{{ $score }}</h4><br>
                        <hr>
                        <h4 style="text-align: center; color: brown">النتيجة النهائية</h4><br>
                        <h4 style="text-align: center">{{ $percentage }} %</h4><br>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
