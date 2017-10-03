<?php
    echo "Hello World";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css">
  </head>
  <body>
    <div class="container is-fluid">
    <div class="notification">
        This container is <strong>fluid</strong>: it will have a 24px gap on either side, on any viewport size.
        <div class="field">
        <div class="container">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder="Email">
                <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fa fa-check"></i>
                </span>
            </p>
            </div>
            <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                <i class="fa fa-lock"></i>
                </span>
            </p>
            </div>
            <div class="field">
            <p class="control">
                <button class="button is-success is-grouped-centered">
                Login
                </button>
            </p>
        </div>
        </div>
    </div>
    </div>
</html>