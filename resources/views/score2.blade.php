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
        $q29 = $_GET['q29'];
        $q30 = $_GET['q30'];
        $q31 = $_GET['q31'];
        $q32 = $_GET['q32'];
        $q33 = $_GET['q33'];
        $q34 = $_GET['q34'];
        $q35 = $_GET['q35'];
        $q36 = $_GET['q36'];
        $q37 = $_GET['q37'];
        $q38 = $_GET['q38'];
        $q39 = $_GET['q39'];
        $q40 = $_GET['q40'];
        $q41 = $_GET['q41'];
        $q42 = $_GET['q42'];
        $q43 = $_GET['q43'];
        $q44 = $_GET['q44'];
        $q45 = $_GET['q45'];
        $q46 = $_GET['q46'];
        $q47 = $_GET['q47'];
        $q48 = $_GET['q48'];
        $q49 = $_GET['q49'];
        $q50 = $_GET['q50'];

        $id = $_GET['id'];
        }

        $score = 0;

        if ($q1 == '3') {
        $score++;
        }
        if ($q2 == '3') {
        $score++;
        }
        if ($q3 == '2') {
        $score++;
        }
        if ($q4 == '4') {
        $score++;
        }
        if ($q5 == '1') {
        $score++;
        }
        if ($q6 == '1') {
        $score++;
        }
        if ($q7 == '1') {
        $score++;
        }
        if ($q8 == '1') {
        $score++;
        }
        if ($q9 == '2') {
        $score++;
        }
        if ($q10 == '1') {
        $score++;
        }
        if ($q11 == '4') {
        $score++;
        }
        if ($q12 == '2') {
        $score++;
        }
        if ($q13 == '3') {
        $score++;
        }
        if ($q14 == '1') {
        $score++;
        }
        if ($q15 == '4') {
        $score++;
        }
        if ($q16 == '3') {
        $score++;
        }
        if ($q17 == '3') {
        $score++;
        }
        if ($q18 == '1') {
        $score++;
        }
        if ($q19 == '2') {
        $score++;
        }
        if ($q20 == '1') {
        $score++;
        }
        if ($q21 == '1') {
        $score++;
        }
        if ($q22 == '2') {
        $score++;
        }
        if ($q23 == '3') {
        $score++;
        }
        if ($q24 == '3') {
        $score++;
        }
        if ($q25 == '1') {
        $score++;
        }
        if ($q26 == '2') {
        $score++;
        }
        if ($q27 == '1') {
        $score++;
        }
        if ($q28 == '2') {
        $score++;
        }
        if ($q29 == '1') {
        $score++;
        }
        if ($q30 == '1') {
        $score++;
        }
        if ($q31 == '2') {
        $score++;
        }
        if ($q32 == '2') {
        $score++;
        }
        if ($q33 == '1') {
        $score++;
        }
        if ($q34 == '1') {
        $score++;
        }
        if ($q35 == '1') {
        $score++;
        }
        if ($q36 == '2') {
        $score++;
        }
        if ($q37 == '1') {
        $score++;
        }
        if ($q38 == '1') {
        $score++;
        }
        if ($q39 == '1') {
        $score++;
        }
        if ($q40 == '2') {
        $score++;
        }
        if ($q41 == '1') {
        $score++;
        }
        if ($q42 == '2') {
        $score++;
        }
        if ($q43 == '1') {
        $score++;
        }
        if ($q44 == '2') {
        $score++;
        }
        if ($q45 == '2') {
        $score++;
        }
        if ($q46 == '1') {
        $score++;
        }
        if ($q47 == '1') {
        $score++;
        }
        if ($q48 == '1') {
        $score++;
        }
        if ($q49 == '1') {
        $score++;
        }
        if ($q50 == '1') {
        $score++;
        }

        $percentage = ($score / 50) * 100;

        // if ($percentage < 90) { 
        
        //     header('Location:/intro2');
        //     exit();
        // } 
        
            $Sql = "UPDATE `users` SET `score2` = $score, `percentage2` = $percentage, `module1` = '1' WHERE `users`.`id` = $id ";
            $scoreResult1 = $conn->query($Sql);
            header('Location:/module');
            exit();

            $conn->close();
            ?>

    </div>

@endsection
