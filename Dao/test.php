<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 13/04/2018
 * Time: 03:53
 */


require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/library/PHPMailer/src/PHPMailer.php');
require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/library/PHPMailer/src/Exception.php');
require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/library/PHPMailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer(true);
$message="<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href=\"https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.10/css/all.css\" integrity=\"sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg\" crossorigin=\"anonymous\">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>

<div class=\"row\">
    <div class=\"col-xs-6\">
        <ul class=\" chats \">

            <li class=\"left clearfix\">
                    	                    <span class=\"chat-img pull-left\">
                    		                      <img src=\"https://bootdey.com/img/Content/avatar/avatar7.png\" alt=\"User Avatar\">
                                            </span>
                <div class=\"chat-body clearfix\">
                    <div class=\"header\">
                        <strong class=\"primary-font\">name</strong>
                        <small class=\"pull-right text-muted\"><i class=\"fa fa-clock-o\"></i>date</small>
                    </div>
                    <p>commmentt</p>



                </div>
            </li>


        </ul>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js\"></script>
</body>
<style>
    .chat-message {
        padding: 60px 20px 115px;
    }

    .chats {
        list-style: none;
        margin: 0;
    }

    .chat-message{
        background: #f9f9f9;
    }

    .chats li img {
        width: 45px;
        height: 45px;
        border-radius: 50em;
        -moz-border-radius: 50em;
        -webkit-border-radius: 50em;
    }

    img {
        max-width: 100%;
    }

    .chat-body {
        padding-bottom: 20px;
    }

    .chats li.left .chat-body {
        margin-left: 70px;
        background-color: #f8f9fa;
    }

    .chats li .chat-body {
        position: relative;
        font-size: 11px;
        padding: 10px;
        border: 1px solid #f8f9fa;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }

    .chats li .chat-body .header {
        padding-bottom: 5px;
        border-bottom: 1px solid #f1f5fc;
    }

    .chats li .chat-body p {
        margin: 0;
    }

    .chats li.left .chat-body:before {
        position: absolute;
        top: 10px;
        left: -8px;
        display: inline-block;
        background: #f8f9fa;
        width: 16px;
        height: 16px;
        border-top: 1px solid #f8f9fa;
        border-left: 1px solid #f8f9fa;
        content: '';
        transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
    }

    .chats li.right .chat-body:before {
        position: absolute;
        top: 10px;
        right: -8px;
        display: inline-block;
        background: #fff;
        width: 16px;
        height: 16px;
        border-top: 1px solid #f1f5fc;
        border-right: 1px solid #f1f5fc;
        content: '';
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
    }

    .chats li {
        margin: 15px 0;
    }

    .chats li.right .chat-body {
        margin-right: 70px;
        background-color: #fff;
    }

    .chat-box {
        position: fixed;
        bottom: 0;
        left: 444px;
        right: 0;
        padding: 15px;
        border-top: 1px solid #eee;
        transition: all .5s ease;
        -webkit-transition: all .5s ease;
        -moz-transition: all .5s ease;
        -ms-transition: all .5s ease;
        -o-transition: all .5s ease;
    }

    .primary-font {
        color: #3c8dbc;
    }

    a:hover, a:active, a:focus {
        text-decoration: none;
        outline: 0;
    }
</style>
</html>";
// Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.googlemail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'cheikhsaadbouh24@gmail.com';                 // SMTP username
    $mail->Password = 'none';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('cheikhsaadbouh24@gmail.com', 'cheikh sadbouh');
    $mail->addAddress('cheikhsoftdev@gmail.com','soft');     // Add a recipient



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message;


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
