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

        $name = $_GET['name'];
        $email = $_GET['email'];
        // $subject = $_GET['subject'];
        $message = $_GET['message'];

        $Sql = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('t', 't', 't')";
        $scoreResult1 = $conn->query($Sql);

        $conn->close();
        ?>

        <?php
        header('Location:/home');
        exit();
        ?>
    </div>


@endsection
