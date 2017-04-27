<?php
require_once 'includes/login.php';
require_once 'includes/register.php';

if (isset($_SESSION['logged'])) {
    header("location: home.php");
}

if (isset($_SESSION['error'])) {
    $error =  $_SESSION['error'];
    unset($_SESSION['error']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration | Metropolitan Hotels & Resorts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/dropdown.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<body>

    <?php require 'templates/header.php' ?>

    <form class="form-horizontal" action="includes/register.php" method="post">
        <fieldset>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="1">First Name</label>
                <div class="col-md-4">
                    <input id="1" name="firstname" type="text" placeholder="" class="form-control input-md" required="">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="2">Last Name</label>
                <div class="col-md-4">
                    <input id="2" name="lastname" type="text" placeholder="" class="form-control input-md" required="true">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="3">Mail address</label>
                <div class="col-md-4">
                    <input id="3" name="mail" type="mail" placeholder="" class="form-control input-md" required="true">
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="5">Enter Password </label>
                <div class="col-md-4">
                    <input id="5" name="password" type="password" placeholder="" class="form-control input-md" required="true">
                </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="6">Re-Enter Password</label>
                <div class="col-md-4">
                    <input id="6" name="re_password" type="password" placeholder="" class="form-control input-md" required="true">
                </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="1"></label>
                <div class="col-md-8">
                    <button id="1" name="register" class="btn btn-success">Sign up</button>
                </div>
            </div>

        </fieldset>
    </form>


    <?php require 'templates/footer.php' ?>

</body>

</html>