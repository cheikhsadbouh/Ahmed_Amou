<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 06/04/2018
 * Time: 12:28
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);


require(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_session_checker.php');
require(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_get_All_posts.php');
require(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_get_user_info.php');
$all_posts=Metier_get_All_posts();


if(!empty($all_posts)) {
    $user_info = Metier_get_user_info();
    $all_posts = array_reverse(Metier_get_All_posts());
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>admin</title>

<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/online_user.css" rel="stylesheet">
<link href="../css/user_post_component.css" rel="stylesheet">
<link href="../css/post_design.css" rel="stylesheet">
<link href="../css/comment.css" rel="stylesheet">
<link href="../css/ripple_button.css" rel="stylesheet">
<link href="../css/avatar.css" rel="stylesheet">
<link href="../css/upload_file.css" rel="stylesheet">
<link href="../css/input_material_design.css" rel="stylesheet">
<link href="../css/my_custom_font_icon.css" rel="stylesheet">


<link href="../css/profil_user.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="../css/admin_page_css.css" rel="stylesheet">
<!-- Custom Fonts -->

<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->


</head>
<body class="home" id="load_me">
<div class="container-fluid display-table">
    <div class="row display-table-row">
        <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
            <div class="logo">
                <a href="home.html"><span class="hidden-xs hidden-sm" style="    font-size: 20px;
    font-weight: bold;
    /* border-bottom-color: white; */
    /* border-bottom-width: 9px; */
    color: white;">SmartProNetwork</span>
                </a>
            </div>
            <div class="navi">
                <ul>
                    <li class="active"><a href="#"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                    <li><a href="admin.php"><i class="fa fa-product-hunt" aria-hidden="true"></i><span class="hidden-xs hidden-sm">My Profil</span></a></li>
                    <li><a href="users.php"><i class="fa fa-users" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 col-sm-11 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            <div class="row">
                <header>
                    <div class="col-md-7">
                        <nav class="navbar-default pull-left">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </nav>
                        <div class="search hidden-xs hidden-sm">
                            <input type="text" placeholder="Search" id="search">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="header-rightside">
                            <ul class="list-inline header-top pull-right">
                                <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li>
                                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                                <li class="dropdown" id="generique" onclick="clear_badge_0()">
                                    <a href="#" class="icon-info dropdown-toggle"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-bell" aria-hidden="true"></i>
                                        <span class=" badge label label-primary">8</span>

                                    </a>
                                    <ul class="dropdown-menu   col-xs-8 scroll_notif chats" style="width: 280px; height: calc(50vh - 9px);
 overflow: hidden;
    outline: none;     border-radius: 5px;
    margin-top: 7px; margin-left: -86px;">

                                        <li> <div class="jumbotron" style="    border-radius: 1px;
    background-color: #F4F4FE;
    color: #3c5eb5;
    height: 118px;
    margin-top: 72px;">
                                    <span style="font-size: larger;
    font-weight: bold;"> no notifiction </span>

                                            </div> </li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php   echo $user_info[0][1]  ;?>" alt="user">
                                        <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="navbar-content">
                                                <span><?php   echo $user_info[0][0]  ;?></span>
                                                <p class="text-muted small">
                                                    <?php   echo $user_info[0][2]  ;?>
                                                </p>
                                                <div class="divider">
                                                </div>
                                                <a href="#" class="view btn-sm active" onclick="logout('<?php echo $_SESSION["id"] ;?>')"><i class="fa fa-1x fa-sign-out" style="    color: #ffffff;
    width: 89px;
    font-size: large;"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </div>
            <div class="user-dashboard">
                <br>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 gutter">


                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3" style="padding-top: 4px;padding-bottom: 11px;">

                                                   <i class="fa fa-4x fa-E"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><i class="fa fa-user"></i></div>
                                                    <div style="font-size: 2em;     margin-right: 62px;" id="expert_u"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">Expert</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3" style="padding-top: 4px;padding-bottom: 11px;">

                                                    <i class="fa fa-4x fa-T"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><i class="fa fa-user"></i></div>
                                                    <div style="font-size: 2em;     margin-right: 62px;"  id="Technician_u"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">Technician</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3" style="padding-top: 4px;padding-bottom: 11px;">

                                                    <i class="fa fa-4x fa-S"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><i class="fa fa-user"></i></div>
                                                    <div style="font-size: 2em;     margin-right: 62px;" id="student_u"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">Student</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3" style="padding-top: 4px;padding-bottom: 11px;">

                                                    <i class="fa fa-4x fa-J"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><i class="fa fa-user"></i></div>
                                                    <div style="font-size: 2em;     margin-right: 62px;"  id="jobless_u"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer">
                                                <span class="pull-left">jobless</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>

                </div>

                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-1 col-lg-1">


                            </div>

                            <!--user info -->
                            <div class=" col-xs-12 col-md-2 col-md-push-7  col-lg-2 ">
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-lg-pull-5">
                                        <div class="col-inside-lg decor-default chat" style="margin-top: 8px; overflow: hidden; min-width: 250px; outline: none;" tabindex="5000">
                                            <div class="chat-users" id="users">
                                                <h6>Online</h6>
                                                <ul style="display: contents;list-style-type: none;">

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!--user  online user  -->

                            <div class="col-xs-12 col-md-7  col-md-pull-2 col-lg-6 col-lg-pull-2">
                                <div class="row activity" style="    margin-top: 7px;">

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
                                                    <button  id="submit_post"  ripple class="btn  my_btn">Post</button>
                                                </div>
                                            </div><!-- /.panel-footer -->
                                        </div><!-- /.timeline-panel.panel -->
                                        <!-- end post -->

                                        <?php  if (empty($all_posts)) {
                                            goto a;
                                        }  for($r=0;$r<count($all_posts);$r++) {
                                        // $t=;

                                        ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <img src="<?php   echo $all_posts[$r][4]  ; $id_post= $all_posts[$r][5] ;?>" class="img-rounded">
                                                <div class="pull-right text-right">
                                                    <i class="fa fa-calendar"></i><br><?php echo $all_posts[$r][1]; ?>
                                                </div>
                                                <div><strong><?php echo $all_posts[$r][3]; ?></strong></div>
                                                <div class="small"><i class="fa fa-anchor"></i>  <?php echo $all_posts[$r][6]; ?> </div>
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
                                                        <button type="button" class="btn btn-link" onclick="post_like('<?php echo  $_SESSION["id"]; ?>','<?php echo $id_post  ; ?>','<?php   echo $all_posts[$r][2]; ?>')"><i class="fa fa-thumbs-o-up"></i> Like</button>
                                                        <button type="button" class="btn btn-link"><i class="fa fa-share"></i> Share</button>
                                                    </div>
                                                    <div class="pull-right"><strong id="increment_like"><?php   echo $all_posts[$r][2]; ?></strong> <span style="color:rgb(60, 94, 181);">liked this</span>  </div>
                                                </div>
                                                <?php if (empty($all_posts[$r][7])) {?>
                                                <div class="" >
                                                    <?php   }else{

                                                    if(count($all_posts[$r][7])>2) {?>
                                                    <div class="scrollable" style=" width: fit-content; height: calc(30vh - 9px);">
                                                        <?php   }else{ ?>
                                                        <div class="" >
                                                            <?php   } }?>

                                                            <?php  $counter=7 ;while(true){
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
                                                                                    <div class="chat_scrolable">
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

                                                                <a class="kit-avatar kit-avatar-28 no-border pull-left" href="#">
                                                                    <img class="media-object" src="<?php   echo $user_info[0][1];?>">
                                                                </a>
                                                                <div class="input-group input-group-in no-border">
                                                                    <input class="form-control comment_value" id="" placeholder="write comment...">
                                                                    <div class="input-group-btn">
                                                                        <button  class="btn  my_btn" ripple style="color:#ffffff;" onclick="test_submit('<?php echo $id_post; ?>','<?php echo $_SESSION["id"] ; ?>')">
                                                                            <i class="fa fa-2x fa-chevron-circle-right"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                        </div>

                                                    </div>
                                                </div>

                                                <?php }  ?>
                                            </div>

                                        </div>
                                        <?php a: $d=0;?>
                                    </div>
                                    <!-- user post -->
                                </div><!-- end row -->
                            </div>

                            <!-- end container-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- Modal -->
<div id="add_project" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header login-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Add Project</h4>
            </div>
            <div class="modal-body">
                <input type="text" placeholder="Project Title" name="name">
                <input type="text" placeholder="Post of Post" name="mail">
                <input type="text" placeholder="Author" name="passsword">
                <textarea placeholder="Desicrption"></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="cancel" data-dismiss="modal">Close</button>
                <button type="button" class="add-project" data-dismiss="modal">Save</button>
            </div>
        </div>

    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/nicescroll.js"></script>
<script src="../js/submit_post.js"></script>
<script src="../js/submit_comment.js"></script>
<script src="../js/online_user.js"></script>
<script src="../js/ripple_event.js"></script>
<script src="../js/logout.js"></script>
<script src="../js/like_post.js"></script>
<script src="../js/avatar.js"></script>
<script src="../js/submit_update_info.js"></script>
<script src="../js/upload_user_img.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="offcanvas"]').click(function(){
            $("#navigation").toggleClass("hidden-xs");
        });
    });

</script>
</body>
</html>