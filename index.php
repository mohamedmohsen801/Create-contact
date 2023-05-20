<?php
//check user 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $cell = filter_var($_POST["cellphone"], FILTER_SANITIZE_NUMBER_INT);
    $msg = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    $userError = "";
    $EmailError = "";
    $cellError = "";


    if (strlen($user) < 3) {
        $userError = "Name can't be less than <strong> 3</strong>";
        # code...
    }

    if ($email == "") {

        $EmailError = "Email can't be empty";
    }
    if ($cell == "") {

        $cellError = "Email can't be empty";
    }
}



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/leon.css" />
    <!--render all elements normally-->
    <link rel="stylesheet" href="css/normalize.css" />
    <!--font.awesome.library-->
    <link rel="stylesheet" href="css/all.min.css">


    <link rel="stylesheet" href="css/contact.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,600;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- start form -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="container">
            <h1 class="text-center">Contact Me</h1>

            <div class="formcontact">

                <i class="fa-solid fa-user fa-fw"></i>

                <input class="form-control  username" type="text" name="username" placeholder="type your username "
                    value="<?php if (isset($user)) {
                                                                                                                                echo $user;
                                                                                                                            } ?>">


                <span class="asterisk">*</span>
            </div>
            <?php if (!empty($userError)) { ?>

            <div class="alert alert-danger" role="alert">
                <?php echo $userError; ?>
            </div>

            <?php } ?>








            <div class="formcontact">
                <i class="fa-solid fa-envelope fa-fw"></i>


                <input class="form-control" type="email" name="email" placeholder="type your email" value="<?php if (isset($email)) {
                                                                                                                echo $email;
                                                                                                            } ?>">

                <span class="asterisk">*</span>
            </div>
            <?php if (!empty($EmailError)) { ?>

            <div class="alert alert-danger" role="alert">
                <?php echo $EmailError; ?>
            </div>

            <?php } ?>
            <div class="formcontact">

                <i class="fa-solid fa-phone fa-fw"></i>


                <input class="form-control" name="cellphone" placeholder="type your cellphone" value="<?php if (isset($cell)) {
                                                                                                            echo $cell;
                                                                                                        } ?>">
                <span class="asterisk">*</span>
            </div>
            <?php if (!empty($cellError)) { ?>

            <div class="alert alert-danger" role="alert">
                <?php echo $cellError; ?>
            </div>

            <?php } ?>


            <textarea class="form-control" name="message" placeholder="type your Message"></textarea>




            <input class="btn btn-success" type="submit" value="send message">
            <i class="fa-sharp fa-solid fa-paper-plane fa-fw"></i>





        </div>


    </form>



    <!-- end form -->
    <script src="js/jquery-1.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>

</html>