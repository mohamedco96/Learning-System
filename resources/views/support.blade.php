<?php
    if (isset($_GET['submit'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $Subject = $_GET['Subject'];
        $message = $_GET['message'];

        // $id = $_GET['id'];
    }

            
        //     if ($percentage < 85) { 
            
        //     header('Location:/module1');
        //     exit();
        // } 
?>

@php
    DB::table('contact')->insert([
        'name' => $name,
        'email' => $email,
        'Subject' => $Subject,
        'message' => $message
    ]);
    
    header('Location:/home');
    exit();
@endphp