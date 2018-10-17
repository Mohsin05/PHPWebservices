    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db = 'myapp';
    $dataResponse = [];
    $dataReceived = $_POST;
    $user_id = $_SESSION["user_id"];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);

    if (!$conn) {
        header('HTTP/1.1 500 Internal Server Error');
        die("Connection failed: " . mysqli_connect_error());
    };

    //inserting the content

    if ($dataReceived) {

        $content = $dataReceived['content'];
        $date = date("Y-m-d");
        $sql = "INSERT INTO content (fk_user_id,content,created_at) VALUES ('$user_id','$content','$date')";

        if (mysqli_query($conn, $sql)) {
            //array_push($dataResponse, ['status'=>'success']);
            };
    }

    //getting the data
    $sql="SELECT * FROM content WHERE fk_user_id = '$user_id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            array_push($dataResponse, ['content' => $row['content'],
                'created_at' => $row['created_at']
            ]);
        }


    }

    //always send data in json_encode form array to json.

    echo json_encode($dataResponse);

    unset($dataResponse);

    mysqli_close($con);