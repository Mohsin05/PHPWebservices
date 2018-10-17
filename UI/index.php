<?php
session_start();
if ($_SESSION["isAuthenticated"] == true) {
    header('Location: views/afterLogin.php');
 }
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

</head>
<body>

<div class="container">

    <header>
        <h1>Login and Registration Form</h1>

    </header>
    <section>
        <div id="container_demo" >
            <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">


                <div id="login" class="animate form">

                    <div id="loginMessage" class="" style=" display:none; text-align: center; width:100%"></div>

                    <form  autocomplete="on" action="#">
                        <p>
                            <label for="username" class="uname" > Your email or username </label>
                            <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                        </p>
                        <p>
                            <label for="password" class="youpasswd"> Your password </label>
                            <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" />
                        </p>
                        <p class="keeplogin">
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                            <label for="loginkeeping">Keep me logged in</label>
                        </p>
                        <p class="login button">
                            <button type="submit" id= "loginButton" class="btn btn-primary">Login</button>
                        </p>

                        <p class="change_link">
                            Not a member yet ?
                            <a href="#toregister" class="to_register">Join us</a>
                        </p>
                    </form>
                </div>

                <div id="register" class="animate form">
                    <form  autocomplete="on" action="#">

                        <div id="registrationMessage" class="" style=" display:none; text-align: center; width:100%"></div>

                        <p>
                            <label for="usernamesignup" class="uname" >Your username</label>
                            <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                        </p>
                        <p>
                            <label for="emailsignup" class="youmail"  > Your email</label>
                            <input id="emailsignup" required="required" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/>
                        </p>
                        <p>
                            <label for="passwordsignup" class="youpasswd" >Your password </label>
                            <input id="passwordsignup" required="required" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p>
                            <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
                            <input id="passwordsignup_confirm" required="required" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                        </p>
                        <p class="signin button">
                            <button type="submit" id= "registerButton" class="btn btn-primary">Register</button>
                        </p>
                        <p class="change_link">
                            Already a member ?
                            <a href="#tologin" class="to_register"> Go and log in </a>
                        </p>
                    </form>

                </div>

            </div>
        </div>
    </section>


    <script src="dataProcessing.js"></script>


</div>
</body>
</html>
