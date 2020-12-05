<?php 

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if($_POST['submit']) {

    $q1 = $_POST['q1'];
	$q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    
    $id = $_POST['id'];


echo 'user id is ' . $id;

	if($q1=='' || $q2 =='' || $q3 =='') {
		echo '<h2>Please answer all questions.</h2>';
	}
	else {
		$score = 0;
		if($q1 == 1) { // 1st option is correct
		$score++;
		}
		if($q2 == 3) { // 3rd option is correct
		$score++;
		}
		if($q3 == 2) { // 2nd option is correct
		$score++;
		}
	        $percentage = $score	/ 3 *100;
        
            
            $sql = "UPDATE `users` SET `score1` = $score, `percentage` = $percentage WHERE `users`.`id` = 4";

		if($percentage < 50)
		{
        echo '<h2>You need to score at least 50% to pass the exam.</h2>';
 
		}
		else {
		echo '<h2>You have passed the exam and scored '.$percentage.'%.</h2>';
		}
	}
}




if ($conn->query($sql) === TRUE) {
    echo "New record created successfully". "<br>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


  $sql = "SELECT `id`,`name`,`score1`,`percentage` FROM `users` WHERE `users`.`id` = 4";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - score1: " . $row["score1"]. " - percentage: " . $row["percentage"]. "<br>";
    }
  } else {
    echo "0 results";
  } 


  $conn->close();
  
?>