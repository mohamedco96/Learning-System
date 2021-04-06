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

        $level='';
        // echo  '#####'.$level.'<br>';

        if ($score <= 85){
            // echo  '#####'.'test1'.'<br>';
            $level='low';
        }

        if ($score >= 85){
            // echo  '#####'.'test2'.'<br>';
            $level='high';
        }

        $lowSql = "SELECT COUNT(*) FROM users WHERE level='low'";
        $HighSql = "SELECT COUNT(*) FROM users WHERE level='high'";

        $result1 = $conn->query($lowSql);
        $result2 = $conn->query($HighSql);

        while ($row = $result1->fetch_assoc()) {
            $low=$row['COUNT(*)'];
        }

        while ($row = $result2->fetch_assoc()) {
            $High=$row['COUNT(*)'];
        }

        // echo  $low.'##########*********';
        // echo  $High.'##########*********';
        // echo  $level.'<br>';
//         echo  $score.'<br>';
//         echo  $percentage.'<br>';
        // echo  $low.'<br>';
        // echo  $High.'<br>';

        switch ($level) {
            case "low":
                if ($low <= 25){
                    $scoreSql1 = "UPDATE `users` SET `level` = 'low' , `support` = 'automatic' , `alm8yas1Score`= $score, `alm8yas1Percentage` = $percentage WHERE `users`.`id` = $id ";
                    $scoreResult1 = $conn->query($scoreSql1);
//                     echo '----------- 2 ---------'.'<br>';
                }else {
//                     echo '----------- 3 ---------'.'<br>';
                    $scoreSql2 = "UPDATE `users` SET `level` = 'low' , 'support' = 'manual' , `alm8yas1Score` = $score, `alm8yas1Percentage` = $percentage WHERE `users`.`id` = $id ";
                    $scoreResult2 = $conn->query($scoreSql2);
                }
                break;
            case "high":
                if ($High <= 25){
                    $scoreSql1 = "UPDATE `users` SET `level` = 'high' , `support` = 'manual' , `alm8yas1Score` = $score, `alm8yas1Percentage` = $percentage WHERE `users`.`id` = $id ";
                    $scoreResult1 = $conn->query($scoreSql1);
//                     echo '----------- 4 ---------'.'<br>';
                }else {
                    $scoreSql1 = "UPDATE `users` SET `level` = 'high' , `support` = 'automatic' , `alm8yas1Score` = $score, `alm8yas1Percentage` = $percentage WHERE `users`.`id` = $id ";
                    $scoreResult1 = $conn->query($scoreSql1);
//                     echo '----------- 5 ---------'.'<br>';
                }
                break;
        }

        $conn->close();
        ?>

    </div>

    <div class="container" style="margin-top: 60px">
        <div class="row">
            <div class="col-md-8 m-x-auto pull-xs-none vamiddle">
                <div class="card" style="margin-top: 60px">
                    <div class="card-block">
                        <h4 style="text-align: center">مستوى الدافعية</h4>
                        @if ($score <= 50)
                        <button class="btn btn-lg btn-pill btn-block btn-warning  " type="button" style="margin-right: 350px; border-radius: 22px; width:150px;">منخفض</button> <br>
                        <button class="btn btn-lg btn-pill btn-block btn-secondary " type="button" style="margin-right: 350px;  border-radius: 22px; width:150px;">مرتفع</button> <br>
						@else
						<button class="btn btn-lg btn-pill btn-block btn-secondary  " type="button" style="margin-right: 350px; border-radius: 22px; width:150px;">منخفض</button> <br>
                        <button class="btn btn-lg btn-pill btn-block btn-warning " type="button" style="margin-right: 350px;  border-radius: 22px; width:150px;">مرتفع</button> <br>
                        @endif

                        <a href="./intro2" class="btn btn-lg btn-pill btn-block btn-info" style="margin-right: 350px;  border-radius: 15px; width:250px;">بدء الإختبار القبلي</a>
                        {{-- <button class="btn btn-lg btn-pill btn-block btn-info " type="button" style="margin-right: 350px;  border-radius: 15px; width:250px;">بدء الإختبار القبلي </button> <br> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
