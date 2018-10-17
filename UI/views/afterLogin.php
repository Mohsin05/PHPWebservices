    <?php
    session_start();
    if ($_SESSION["isAuthenticated"] == false) {
        header('Location: ../index.php'); }
    ?>



    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Dear Diary</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="http://abpetkov.github.io/switchery/dist/switchery.min.css" rel="stylesheet">

    </head>
    <body>

    <img src="../Resources/Images/newYork.jpg">

    <div class="logout">
        <button type="button" id="logoutButton" class="btn btn-danger btn-lg btn3d"><span class="glyphicon glyphicon-off"></span></button>
    </div>

    <div class="welcome ">
        <div class="logo">
            <a ">Welcome back Mohsin<br>What's on your mind!</a>
        </div>
    </div>


    <div class="history" id="history">
        <h2 class=" alert alert-info" style="width: 130px">History</h2>
        <span id="dateButton"></span>
    </div>

    <div class="message">

        <div class="alert alert-success" role="alert">
            Thank you for sharing your feelings!<br>
            We have memorized them :)
        </div>

    </div>

    <div class="yourThoughts">
        <form action="#">
            <div class="form-group">
                <textarea class="form-control" name="content" placeholder="Share your story..." rows="5" id="content"></textarea>
                <button  id ="submitContent" style="margin-left: 24%; margin-top: 5px" type="submit" class="btn btn-success">Share it</button>
            </div>

        </form>
    </div>

    <div class="plate">
        <p class="script"><span>DEAR DIARY</span></p>
        <p class="shadow text1">YOUR</p>
        <p class="shadow text1">SPIRITUAL</p>
        <p class="shadow text1">FRIEND</p>
    <!--    <p class="shadow text2">SIRTUAL </p>-->
    <!--    <p class="shadow text3">DIARY</p>-->
        <p class="script"><span>by Mohsin</span></p>
    </div>

        <script src="afterLogin.js"></script

    </div>
    </body>
    </html>