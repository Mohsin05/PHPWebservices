<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = 'myapp';

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn) {
        header('HTTP/1.1 500 Internal Server Error');
        die("Connection failed: " . mysqli_connect_error());
    };


    $dataReceived = $_POST;
    $dataResponse = [];
    $isAuthenticated = false;
    $username = (string)$dataReceived['username'];
    $passwordLogin = (string)$dataReceived['password'];
    $salt="M@Y@N!.41AS-0asd*";
    $passwordEncr = crypt($passwordLogin,$salt);


    $sql="SELECT user_id,user_name,email,date_created FROM user WHERE (email = '$username' || user_name = '$username') AND password = '$passwordEncr'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        session_start();
        $isAuthenticated = true;
        $_SESSION["isAuthenticated"] = $isAuthenticated;


        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION["user_id"] = $row['user_id'];
            array_push($dataResponse, [
                'user_name' => $row['user_name'],
                'date_created' => $row['date_created']
            ]);
        } header('HTTP/1.1 200');
    }
    else {
        $_SESSION["isAuthenticated"] = $isAuthenticated;
        header('HTTP/1.1 401 Unauthorized, Password or Email does not match or you are not registered with us' );
    }

    //always send data in json_encode form array to json.

    echo json_encode($dataResponse);

    unset($dataResponse);

    mysqli_close($con);