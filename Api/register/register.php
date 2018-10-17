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
    $username = (string)$dataReceived['usernamesignup'];
    $emailsignup = (string)$dataReceived['emailsignup'];
    $passwordsignup = (string)$dataReceived['passwordsignup'];



    //inserting into data base

        $sql = "INSERT INTO user (user_name, email, password, date_created)
        VALUES ('$username','$emailsignup','$passwordsignup','2018-11-09')";

        if (mysqli_query($conn, $sql)) {

            array_push($dataResponse, ["status"=>"New record created successfully",
                                              "username"=>$dataReceived['usernamesignup'],
                                                "email"=>$dataReceived['emailsignup']]);
            header('HTTP/1.1 200');

        } else {

            $errorMsg = mysqli_error($conn);
            $errorMsgCode = mysqli_errno($conn);

            if($errorMsgCode == 1062){
            array_push($dataResponse,['status'=>$errorMsg]);
            header('HTTP/1.1 409 User already exists');
            }

            if($errorMsgCode == 1054){
            array_push($dataResponse,['status'=>$errorMsg]);
            header('HTTP/1.1 500 Internal Server Error');

            }
        }

      //always send data in json_encode form array to json.

        mysqli_close($con);
      echo json_encode($dataResponse);

