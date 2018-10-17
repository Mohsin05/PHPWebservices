<?php
/**
 * Created by PhpStorm.
 * User: m.younas
 * Date: 15.10.18
 * Time: 22:22
 */


session_start();

print_r( $_SESSION)
;

//$servername = "localhost";
//$username = "root";
//$password = "root";
//$db = 'myapp';
//
//// Create connection
//$conn = mysqli_connect($servername, $username, $password, $db);
//$dataResponse = [];
//
//$sql = "INSERT INTO content (fk_user_id,content,created_at)
//        VALUES (16,'$content','$date')";
//
//
//
//if (mysqli_query($conn, $sql)) {
//    echo "New record created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
//
//
//    echo json_encode($dataResponse);
//
