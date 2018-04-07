<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 06/04/2018
 * Time: 12:29
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


require(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_session_checker.php');
require(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_get_All_posts.php');
$all_posts=Metier_get_All_posts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>


    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/online_user.css" rel="stylesheet">
    <link href="../css/user_post_component.css" rel="stylesheet">
    <link href="../css/post_design.css" rel="stylesheet">

    <link href="../css/profil_user.css" rel="stylesheet">
    <!-- Custom Fonts -->

    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand  " href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="../">Default <span class="sr-only">(current)</span></a></li>
                <li><a href="../navbar-static-top/">Static top</a></li>
                <li><a href="#"  data-toggle="modal" data-target="#login-Modal">Fixed top</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-3 col-lg-3">

            <div class="userProfileInfo">
                <div class="image text-center">
                    <img src="../img/avatar6.png" alt="#" class="img-responsive image">
                    <a href="#" title="#" class="editImage">
                        <i class="fa fa-camera"></i>
                    </a>
                </div>
                <div class="box">
                    <div class="name"><strong>John Doe</strong></div>
                    <div class="info">
                        <span><i class="fa fa-fw fa-clock-o"></i> <a href="tel:+4210555888777" title="#">+421 (0) 555 888 777</a></span>
                        <span><i class="fa fa-fw fa-list-alt"></i> <a href="#" title="#">name@example.com</a></span>
                        <span><i class="fa fa-fw fa-usd"></i> Best street No. 554/7A<br>949 01 Florida<br>United States</span>
                    </div>
                    <div class="socialIcons clearfix">
                        <a href="#" title="#" class="fb">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" title="#" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" title="#" class="google-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--user info -->
        <div class=" col-xs-12 col-md-2 col-md-push-7  col-lg-2 ">
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-xs-12 col-lg-pull-5">
                    <div class="col-inside-lg decor-default chat" style="overflow: hidden; min-width: 250px; outline: none;" tabindex="5000">
                        <div class="chat-users">
                            <h6>Online</h6>

                            <?php  for($i=0;$i<20;$i++){?>
                                <div class="user">
                                    <div class="avatar">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                        <div class="status off"></div>
                                    </div>
                                    <div class="name">User name</div>
                                    <div class="mood">User mood</div>
                                </div>
                            <?php  }?>

                        </div>
                    </div>
                </div>
            </div>
<div class="clearfix"></div>
        </div>
        <!--user  online user  -->
        <div class="col-xs-12 col-md-7  col-md-pull-2 col-lg-6 col-lg-pull-2">
            <div class="row activity">

                <div class="col-md-12">
                    <div class="timeline-panel panel fade in panel-default panel-fill" data-fill-color="true" data-init-panel="true">
                        <div class="panel-body">
                            <ul class="nav nav-tabs nav-contrast-red">
                                <li class="active"><a data-toggle="tab" href="#" aria-expanded="false">Status</a></li>
                            </ul>
                            <div class="tab-content pt-1x">
                                <textarea name="post"  id="mytextera" rows="2" class="form-control autogrow no-border no-resize" placeholder="Write in timeline" style="overflow: hidden; min-height: 6em; height: 52px;"></textarea><div class="autogrow-textarea-mirror" style="display: none; word-wrap: break-word; white-space: normal; padding: 6px 12px; width: 461px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">.<br>.</div>
                            </div>
                        </div><!-- /.panel-body -->
                        <div class="panel-footer">
                            <div class="btn-group">
                                <button type="button" class="btn btn-link"><i class="fa fa-user"></i></button>
                                <button type="button" class="btn btn-link"><i class="fa fa-map-marker"></i></button>
                                <button type="button" class="btn btn-link"><i class="fa fa-camera"></i></button>
                                <button type="button" class="btn btn-link"><i class="fa fa-smile-o"></i></button>
                            </div>
                            <div class="pull-right">
                                <button type="submit" id="submit_post" class="btn btn-success">Post</button>
                            </div>
                        </div><!-- /.panel-footer -->
                    </div><!-- /.timeline-panel.panel -->
<!-- end post -->
                    <?php for($r=0;$r<count($all_posts);$r++) {
                      // $t=;

                       ?>
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <img src="<?php   echo $all_posts[$r][4]  ;?>" class="img-rounded">
                            <div class="pull-right text-right">
                                <i class="fa fa-calendar"></i><br><?php echo $all_posts[$r][1]; ?>
                            </div>
                            <div><strong><?php echo $all_posts[$r][3]; ?></strong></div>
                            <div class="small"><i class="fa fa-map-marker"></i> Medellin, Colombia</div>
                        </div>
                        <div class="panel-body">
                            <?php if(str_word_count($all_posts[$r][0])>180) { ?>
                            <div class="chat">
                                <?php echo $all_posts[$r][0] ; ?>
                            </div>
                            <?php } else{?>

                                    <?php echo $all_posts[$r][0] ; ?>

                             <?php } ?>
                            <div class="actions">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-link"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                    <button type="button" class="btn btn-link"><i class="fa fa-share"></i> Share</button>
                                </div>
                                <div class="pull-right"><strong><?php   echo $all_posts[$r][2]; ?></strong>  liked this</div>
                            </div>
                            <?php if (empty($all_posts[$r][5])) {?>
                            <div class="" >
                                <?php   }else{

                            if(count($all_posts[$r][5])>2) {?>
                            <div class="scrollable" style="height: calc(100vh - 18px);">
                            <?php   }else{ ?>
                                <div class="" >
                            <?php   } }?>

                         <?php  $counter=5 ;while(true){
                             if (empty($all_posts[$r][$counter])) {
                                 break;
                             }
                             ?>
                            <!--<div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-rounded" src="<?php /*echo $all_posts[$r][$counter][3]; */?>">
                                </a>
                                <div class="media-body">
                                    <div class="pull-right small"><?php /*echo $all_posts[$r][$counter][1]; */?></div>
                                    <h4 class="media-heading"><?php /*echo $all_posts[$r][$counter][2]; */?></h4>
                                    <p ><?php /*echo $all_posts[$r][$counter][0]; */?></p>
                                </div>
                            </div>-->

                            <div class="media">
                                <div class="media-body  ">
                                    <ul class=" chats ">

                                            <li class="left clearfix">
                    	                    <span class="chat-img pull-left">
                    		                      <img src="<?php echo $all_posts[$r][$counter][3]; ?>" alt="User Avatar">
                                            </span>
                                                <div class="chat-body clearfix">
                                                    <div class="header">
                                                        <strong class="primary-font"><?php echo $all_posts[$r][$counter][2]; ?></strong>
                                                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> <?php echo $all_posts[$r][$counter][1]; ?></small>
                                                    </div>
                                                    <p>


                                                        <?php if(str_word_count($all_posts[$r][$counter][0])>180) { ?>
                                                    <div class="chat">
                                                        <?php echo  $all_posts[$r][$counter][0] ; ?>
                                                    </div>
                                                    <?php } else{?>

                                                        <?php echo  $all_posts[$r][$counter][0] ; ?>

                                                    <?php } ?>

                                                </div>
                                            </li>


                                    </ul>
                                </div>
                            </div>


                         <?php  $counter++; if (empty($all_posts[$r][$counter])) {
                                 break;
                             }} ?>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-xs-12">
                                    <form action="#">
                                        <a class="kit-avatar kit-avatar-28 no-border pull-left" href="#">
                                            <img class="media-object" src="<?php echo $_SESSION["img"] ;?>">
                                        </a>
                                        <div class="input-group input-group-in no-border">
                                            <input class="form-control" placeholder="write comment...">
                                            <div class="input-group-btn">
                                                <button type="submit" class="btn">
                                                    <i class="fa fa-2x fa-chevron-circle-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                            </div>

                        </div>
                    </div>

                    <?php }  ?>
                </div>

            </div>

        </div>
        <!-- user post -->
    </div><!-- end row -->
</div><!-- end container-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
<script src="../js/nicescroll.js"></script>
<script src="../js/submit_post.js"></script>



</body>

<style>

  /*  .card .card-content {
        padding: 16px;
        border-radius: 0 0 2px 2px;
        background-clip: padding-box;
        box-sizing: border-box;
    }
    .card .card-content p {
        margin: 0;
        color: inherit;
    }
    .card .card-content span.card-title {
        line-height: 48px;
    }

    .card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }
*/


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
</html>
