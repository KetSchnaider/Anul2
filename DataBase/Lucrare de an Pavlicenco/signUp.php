<?php
session_start();
include "includes/functions.php";
singUp();
?>

<head>
    <title>
        PHARMA
    </title>
    <link rel="icon" href="images/logo.png" type="image/icon type">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<div class="container">
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">


        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Înregistrează-te</div>
            </div>
            <?php

            message();
            ?>
            <div class="panel-body">
                <form id="signupform" class="form-horizontal" role="form" method="post" action="signUp.php">
                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="email" placeholder="Email ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">Nume</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="Fname" placeholder="Nume">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Prenume</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="Lname" placeholder="Prenume">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-md-3 control-label">Adresă</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="address" placeholder="Adresa">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Parolă</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="passwd" placeholder="Parola">
                        </div>
                    </div>
                    <div style=" margin-left: 39px;">
                        <b> Parola trebuie să conțină următoarele:</b>
                        <ul>
                            <li>cel puțin 1 număr și 1 literă</li>
                            <li>trebuie să aibă 8-30 de caractere</li>
                        </ul>
                    </div>


                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <input id="btn-login" class="btn btn-success" type="submit" value="Sign Up" name="singUp" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                            Ai deja un cont?!
                                <a href="login.php">
                                Conectează-te aici
                                </a>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>