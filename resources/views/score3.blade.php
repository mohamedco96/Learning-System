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
        $q4 = $_GET['q4'];
        $q5 = $_GET['q5'];
        
        $id = $_GET['id'];
        }

        $score=0;
        
        
       if($q1 == '1'){
           $score++;
       }
       if($q2 == '2'){
           $score++;
       }
       if($q3 == '3'){
           $score++;
       }
       if($q4 == '1'){
           $score++;
       }
       if($q5 == '1'){
           $score++;
       }


        $percentage = ($score / 5) * 100;


        $Sql = "UPDATE `users` SET  `score3` = $score, `percentage3` = $percentage WHERE `users`.`id` = $id ";
        $scoreResult1 = $conn->query($Sql);
    
        $conn->close();
        ?>

    </div>
    

@endsection
