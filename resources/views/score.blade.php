@extends('layouts.quiz')
@section('content')
    <div>
        <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '123';
        $dbname = 'learning';

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
        }

        if (isset($_GET['submit'])) {
        $q1 = $_GET['q1'];
        $q2 = $_GET['q2'];
        $q3 = $_GET['q3'];
        $id = $_GET['id'];
        }

        $score = 0;
        if ($q1 == 1) {
        // 1st option is correct
        $score++;
        }
        if ($q2 == 3) {
        // 3rd option is correct
        $score++;
        }
        if ($q3 == 2) {
        // 2nd option is correct
        $score++;
        }
        $percentage = ($score / 3) * 100;

        $level='';
        echo  '#####'.$level.'<br>';

        if ($percentage <= 50){
            echo  '#####'.'test1'.'<br>';
            $level='low';
        }

        if ($percentage >= 50){
            echo  '#####'.'test2'.'<br>';
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
        echo  $level.'<br>';
        echo  $score.'<br>';
        echo  $percentage.'<br>';
        echo  $low.'<br>';
        echo  $High.'<br>';

        switch ($level) {
            case "low":
                if ($low <= 25){
                    $scoreSql1 = "UPDATE `users` SET `level` = 'low' , `support` = 'automatic' , `score1` = $score, `percentage1` = $percentage WHERE `users`.`id` = $id ";
                    $scoreResult1 = $conn->query($scoreSql1);
                    echo '----------- 2 ---------'.'<br>';
                }else {
                    echo '----------- 3 ---------'.'<br>';
                    $scoreSql2 = "UPDATE `users` SET `level` = 'low' , 'support' = 'manual' , `score1` = $score, `percentage1` = $percentage WHERE `users`.`id` = $id ";
                    $scoreResult2 = $conn->query($scoreSql2);
                }
                break;
            case "high":
                if ($High <= 25){
                    $scoreSql1 = "UPDATE `users` SET `level` = 'high' , `support` = 'manual' , `score1` = $score, `percentage1` = $percentage WHERE `users`.`id` = $id ";
                    $scoreResult1 = $conn->query($scoreSql1);
                    echo '----------- 4 ---------'.'<br>';
                }else {
                    $scoreSql2 = "UPDATE `users` SET `level` = 'high' , 'support' = 'automatic' , `score1` = $score, `percentage1` = $percentage WHERE `users`.`id` = $id ";
                    $scoreResult2 = $conn->query($scoreSql2);
                    echo '----------- 5 ---------'.'<br>';
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
                        @if ($percentage < 50)
							<h1>منخفض</h1>
							<h1>{{ $percentage }}</h1>
						@else
							<h1>مرتفع</h1>
							<h1>{{ $percentage }}</h1>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
