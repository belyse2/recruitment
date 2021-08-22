<?php
include ("connection2.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> WELCOME TO OUR WEBSITE  JOB RECRUITMENT </title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="header"> 
            <div class="main">
                <div class="logo"> 
                    <img src="images/logo.png">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="jobs.html">JOBS</a></li>
                        <!-- <li><a href="#">GALLERY</a></li> -->
                        <li><a href="how it works.html">HOW IT WORKS</a></li>
                        <li class="active"><a href="#">CONTACT US</a></li>
                        <li><a href="login.html">LOGIN</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="body container">
            <div class="contactus row">
                <div class="col-md-4 fullheight webbg">
                    <h5 class="text-white">Let's get in touch</h5>
                    <p class="text-white" style="font-size: 12px;">We are open for any suggestion or just to chat. Use our contacts below and follow us on our social medias!</p>
                    <div class="media">
                        <div class="contact-icon-container align-self-start mr-2">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </div>
                        <div class="media-body">
                            <p class="text-white">Kigali, Rwanda</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="contact-icon-container align-self-start mr-2">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </div>
                        <div class="media-body">
                            <p class="text-white">+(250) 780 223 345</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="contact-icon-container align-self-start mr-2">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </div>
                        <div class="media-body">
                            <p class="text-white">info@dreamjob.com</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="contact-icon-container align-self-start mr-2">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </div>
                        <div class="media-body">
                            <p class="text-white">https://dreamjob.com</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="contact-icon-container align-self-start mr-2">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </div>
                        <div class="media-body">
                            <p class="text-white">dream_job</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="contact-icon-container align-self-start mr-2">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </div>
                        <div class="media-body">
                            <p class="text-white">dreamjob</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="contact-icon-container align-self-start mr-2">
                            <span class="glyphicon glyphicon-envelope"></span>
                        </div>
                        <div class="media-body">
                            <p class="text-white">dreamjob250</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 fullheight ashbg">
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">First Name</label>
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label">Last Name</label>
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label">Email</label>
                                    <input type="text" id="email" name="email" placeholder="e-mail" class="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label">Title</label>
                                    <input type="text" class="input">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label">Message</label>
                                    <textarea class="textarea" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="form-control btn btn-sm btn-curved webbg">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

