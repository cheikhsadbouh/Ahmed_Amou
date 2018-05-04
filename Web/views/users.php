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
require(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_get_all_users.php');
require(dirname( dirname(dirname(__FILE__))).'/Metier/Metier_get_user_info.php');
$all_users=Metier_get_all_users();


if(!empty($all_users)) {
    $user_info = Metier_get_user_info();
    $all_users = array_reverse(Metier_get_all_users());
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
    <link href="../css/avatar.css" rel="stylesheet">
    <link href="../css/profil_user.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../css/admin_page_css.css" rel="stylesheet">
    <link href="../css/card.css" rel="stylesheet">
    <!-- Custom Fonts -->


    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            margin: 30px auto;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0,0,0,.05);
        }
        .table-wrapper .btn {
            float: right;
            color: #333;
            background-color: #fff;
            border-radius: 3px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }
        .table-wrapper .btn:hover {
            color: #333;
            background: #f2f2f2;
        }
        .table-wrapper .btn.btn-primary {
            color: #fff;
            background: #03A9F4;
        }
        .table-wrapper .btn.btn-primary:hover {
            background: #03a3e7;
        }
        .table-title .btn {
            font-size: 13px;
            border: none;
        }
        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }
        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }
        .table-title {
            color: #fff;
            background: #4b5366;
            padding: 16px 25px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }
        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }
        .show-entries select.form-control {
            width: 60px;
            margin: 0 5px;
        }
        .table-filter .filter-group {
            float: right;
            margin-left: 15px;
        }
        .table-filter input, .table-filter select {
            height: 34px;
            border-radius: 3px;
            border-color: #ddd;
            box-shadow: none;
        }
        .table-filter {
            padding: 5px 0 15px;
            border-bottom: 1px solid #e9e9e9;
            margin-bottom: 5px;
        }
        .table-filter .btn {
            height: 34px;
        }
        .table-filter label {
            font-weight: normal;
            margin-left: 10px;
        }
        .table-filter select, .table-filter input {
            display: inline-block;
            margin-left: 5px;
        }
        .table-filter input {
            width: 200px;
            display: inline-block;
        }
        .filter-group select.form-control {
            width: 110px;
        }
        .filter-icon {
            float: right;
            margin-top: 7px;
        }
        .filter-icon i {
            font-size: 18px;
            opacity: 0.7;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }
        table.table tr th:first-child {
            width: 60px;
        }
        table.table tr th:last-child {
            width: 80px;
        }
        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }
        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }
        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }
        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
        }
        table.table td a:hover {
            color: #2196F3;
        }
        table.table td a.view {
            width: 30px;
            height: 30px;
            color: #2196F3;
            border: 2px solid;
            border-radius: 30px;
            text-align: center;
        }
        table.table td a.view i {
            font-size: 22px;
            margin: 2px 0 0 1px;
        }
        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }
        .status {
            font-size: 30px;
            margin: 2px 2px 0 0;
            display: inline-block;
            vertical-align: middle;
            line-height: 10px;
        }
        .text-success {
            color: #10c469;
        }
        .text-info {
            color: #62c9e8;
        }
        .text-warning {
            color: #FFC107;
        }
        .text-danger {
            color: #ff5b5b;
        }
        .pagination {
            float: right;
            margin: 0 0 5px;
        }
        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }
        .pagination li a:hover {
            color: #666;
        }
        .pagination li.active a {
            background: #03A9F4;
        }
        .pagination li.active a:hover {
            background: #0397d6;
        }
        .pagination li.disabled i {
            color: #ccc;
        }
        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }
        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }
    </style>
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
                           <div class="col-xs-12   col-lg-12  " style="    ">

                             <!--      <table id="example" class="display responsive" width="100%">
                                       <thead>
                                       <tr>
                                           <th></th>
                                           <th>Name</th>
                                           <th>Position</th>
                                           <th>Office</th>
                                           <th>Age</th>
                                           <th>Start date</th>
                                           <th>Salary</th>
                                       </tr>
                                       </thead>

                                       <tfoot>
                                       <tr>
                                           <th></th>
                                           <th>Name</th>
                                           <th>Position</th>
                                           <th>Office</th>
                                           <th>Age</th>
                                           <th>Start date</th>
                                           <th>Salary</th>
                                       </tr>
                                       </tfoot>

                                       <tbody>
                                       <tr>
                                           <td></td>
                                           <td>Tiger Nixon</td>
                                           <td>System Architect</td>
                                           <td>Edinburgh</td>
                                           <td>61</td>
                                           <td>2011/04/25</td>
                                           <td>$3,120</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Garrett Winters</td>
                                           <td>Director</td>
                                           <td>Edinburgh</td>
                                           <td>63</td>
                                           <td>2011/07/25</td>
                                           <td>$5,300</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Ashton Cox</td>
                                           <td>Technical Author</td>
                                           <td>San Francisco</td>
                                           <td>66</td>
                                           <td>2009/01/12</td>
                                           <td>$4,800</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Cedric Kelly</td>
                                           <td>Javascript Developer</td>
                                           <td>Edinburgh</td>
                                           <td>22</td>
                                           <td>2012/03/29</td>
                                           <td>$3,600</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Jenna Elliott</td>
                                           <td>Financial Controller</td>
                                           <td>Edinburgh</td>
                                           <td>33</td>
                                           <td>2008/11/28</td>
                                           <td>$5,300</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Brielle Williamson</td>
                                           <td>Integration Specialist</td>
                                           <td>New York</td>
                                           <td>61</td>
                                           <td>2012/12/02</td>
                                           <td>$4,525</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Herrod Chandler</td>
                                           <td>Sales Assistant</td>
                                           <td>San Francisco</td>
                                           <td>59</td>
                                           <td>2012/08/06</td>
                                           <td>$4,080</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Rhona Davidson</td>
                                           <td>Integration Specialist</td>
                                           <td>Edinburgh</td>
                                           <td>55</td>
                                           <td>2010/10/14</td>
                                           <td>$6,730</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Colleen Hurst</td>
                                           <td>Javascript Developer</td>
                                           <td>San Francisco</td>
                                           <td>39</td>
                                           <td>2009/09/15</td>
                                           <td>$5,000</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Sonya Frost</td>
                                           <td>Software Engineer</td>
                                           <td>Edinburgh</td>
                                           <td>23</td>
                                           <td>2008/12/13</td>
                                           <td>$3,600</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Jena Gaines</td>
                                           <td>System Architect</td>
                                           <td>London</td>
                                           <td>30</td>
                                           <td>2008/12/19</td>
                                           <td>$5,000</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Quinn Flynn</td>
                                           <td>Financial Controller</td>
                                           <td>Edinburgh</td>
                                           <td>22</td>
                                           <td>2013/03/03</td>
                                           <td>$4,200</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Charde Marshall</td>
                                           <td>Regional Director</td>
                                           <td>San Francisco</td>
                                           <td>36</td>
                                           <td>2008/10/16</td>
                                           <td>$5,300</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Haley Kennedy</td>
                                           <td>Senior Marketing Designer</td>
                                           <td>London</td>
                                           <td>43</td>
                                           <td>2012/12/18</td>
                                           <td>$4,800</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Tatyana Fitzpatrick</td>
                                           <td>Regional Director</td>
                                           <td>London</td>
                                           <td>19</td>
                                           <td>2010/03/17</td>
                                           <td>$2,875</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Michael Silva</td>
                                           <td>Senior Marketing Designer</td>
                                           <td>London</td>
                                           <td>66</td>
                                           <td>2012/11/27</td>
                                           <td>$3,750</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Paul Byrd</td>
                                           <td>Javascript Developer</td>
                                           <td>New York</td>
                                           <td>64</td>
                                           <td>2010/06/09</td>
                                           <td>$5,000</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Gloria Little</td>
                                           <td>Systems Administrator</td>
                                           <td>New York</td>
                                           <td>59</td>
                                           <td>2009/04/10</td>
                                           <td>$3,120</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Bradley Greer</td>
                                           <td>Software Engineer</td>
                                           <td>London</td>
                                           <td>41</td>
                                           <td>2012/10/13</td>
                                           <td>$3,120</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Dai Rios</td>
                                           <td>System Architect</td>
                                           <td>Edinburgh</td>
                                           <td>35</td>
                                           <td>2012/09/26</td>
                                           <td>$4,200</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Jenette Caldwell</td>
                                           <td>Financial Controller</td>
                                           <td>New York</td>
                                           <td>30</td>
                                           <td>2011/09/03</td>
                                           <td>$4,965</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Yuri Berry</td>
                                           <td>System Architect</td>
                                           <td>New York</td>
                                           <td>40</td>
                                           <td>2009/06/25</td>
                                           <td>$3,600</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Caesar Vance</td>
                                           <td>Technical Author</td>
                                           <td>New York</td>
                                           <td>21</td>
                                           <td>2011/12/12</td>
                                           <td>$4,965</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Doris Wilder</td>
                                           <td>Sales Assistant</td>
                                           <td>Edinburgh</td>
                                           <td>23</td>
                                           <td>2010/09/20</td>
                                           <td>$4,965</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Angelica Ramos</td>
                                           <td>System Architect</td>
                                           <td>London</td>
                                           <td>36</td>
                                           <td>2009/10/09</td>
                                           <td>$2,875</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Gavin Joyce</td>
                                           <td>Developer</td>
                                           <td>Edinburgh</td>
                                           <td>42</td>
                                           <td>2010/12/22</td>
                                           <td>$4,525</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Jennifer Chang</td>
                                           <td>Regional Director</td>
                                           <td>London</td>
                                           <td>28</td>
                                           <td>2010/11/14</td>
                                           <td>$4,080</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Brenden Wagner</td>
                                           <td>Software Engineer</td>
                                           <td>San Francisco</td>
                                           <td>18</td>
                                           <td>2011/06/07</td>
                                           <td>$3,750</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Ebony Grimes</td>
                                           <td>Software Engineer</td>
                                           <td>San Francisco</td>
                                           <td>48</td>
                                           <td>2010/03/11</td>
                                           <td>$2,875</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Russell Chavez</td>
                                           <td>Director</td>
                                           <td>Edinburgh</td>
                                           <td>20</td>
                                           <td>2011/08/14</td>
                                           <td>$3,600</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Michelle House</td>
                                           <td>Integration Specialist</td>
                                           <td>Edinburgh</td>
                                           <td>37</td>
                                           <td>2011/06/02</td>
                                           <td>$3,750</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Suki Burks</td>
                                           <td>Developer</td>
                                           <td>London</td>
                                           <td>53</td>
                                           <td>2009/10/22</td>
                                           <td>$2,875</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Prescott Bartlett</td>
                                           <td>Technical Author</td>
                                           <td>London</td>
                                           <td>27</td>
                                           <td>2011/05/07</td>
                                           <td>$6,730</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Gavin Cortez</td>
                                           <td>Technical Author</td>
                                           <td>San Francisco</td>
                                           <td>22</td>
                                           <td>2008/10/26</td>
                                           <td>$6,730</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Martena Mccray</td>
                                           <td>Integration Specialist</td>
                                           <td>Edinburgh</td>
                                           <td>46</td>
                                           <td>2011/03/09</td>
                                           <td>$4,080</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Unity Butler</td>
                                           <td>Senior Marketing Designer</td>
                                           <td>San Francisco</td>
                                           <td>47</td>
                                           <td>2009/12/09</td>
                                           <td>$3,750</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Howard Hatfield</td>
                                           <td>Financial Controller</td>
                                           <td>San Francisco</td>
                                           <td>51</td>
                                           <td>2008/12/16</td>
                                           <td>$4,080</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Hope Fuentes</td>
                                           <td>Financial Controller</td>
                                           <td>San Francisco</td>
                                           <td>41</td>
                                           <td>2010/02/12</td>
                                           <td>$4,200</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Vivian Harrell</td>
                                           <td>System Architect</td>
                                           <td>San Francisco</td>
                                           <td>62</td>
                                           <td>2009/02/14</td>
                                           <td>$4,965</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Timothy Mooney</td>
                                           <td>Financial Controller</td>
                                           <td>London</td>
                                           <td>37</td>
                                           <td>2008/12/11</td>
                                           <td>$4,200</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Jackson Bradshaw</td>
                                           <td>Director</td>
                                           <td>New York</td>
                                           <td>65</td>
                                           <td>2008/09/26</td>
                                           <td>$5,000</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Miriam Weiss</td>
                                           <td>Support Engineer</td>
                                           <td>Edinburgh</td>
                                           <td>64</td>
                                           <td>2011/02/03</td>
                                           <td>$4,965</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Bruno Nash</td>
                                           <td>Software Engineer</td>
                                           <td>London</td>
                                           <td>38</td>
                                           <td>2011/05/03</td>
                                           <td>$4,200</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Odessa Jackson</td>
                                           <td>Support Engineer</td>
                                           <td>Edinburgh</td>
                                           <td>37</td>
                                           <td>2009/08/19</td>
                                           <td>$3,600</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Thor Walton</td>
                                           <td>Developer</td>
                                           <td>New York</td>
                                           <td>61</td>
                                           <td>2013/08/11</td>
                                           <td>$3,600</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Finn Camacho</td>
                                           <td>Support Engineer</td>
                                           <td>San Francisco</td>
                                           <td>47</td>
                                           <td>2009/07/07</td>
                                           <td>$4,800</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Elton Baldwin</td>
                                           <td>Data Coordinator</td>
                                           <td>Edinburgh</td>
                                           <td>64</td>
                                           <td>2012/04/09</td>
                                           <td>$6,730</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Zenaida Frank</td>
                                           <td>Software Engineer</td>
                                           <td>New York</td>
                                           <td>63</td>
                                           <td>2010/01/04</td>
                                           <td>$4,800</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Zorita Serrano</td>
                                           <td>Software Engineer</td>
                                           <td>San Francisco</td>
                                           <td>56</td>
                                           <td>2012/06/01</td>
                                           <td>$5,300</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Jennifer Acosta</td>
                                           <td>Javascript Developer</td>
                                           <td>Edinburgh</td>
                                           <td>43</td>
                                           <td>2013/02/01</td>
                                           <td>$2,875</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Cara Stevens</td>
                                           <td>Sales Assistant</td>
                                           <td>New York</td>
                                           <td>46</td>
                                           <td>2011/12/06</td>
                                           <td>$4,800</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Hermione Butler</td>
                                           <td>Director</td>
                                           <td>London</td>
                                           <td>47</td>
                                           <td>2011/03/21</td>
                                           <td>$4,080</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Lael Greer</td>
                                           <td>Systems Administrator</td>
                                           <td>London</td>
                                           <td>21</td>
                                           <td>2009/02/27</td>
                                           <td>$3,120</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Jonas Alexander</td>
                                           <td>Developer</td>
                                           <td>San Francisco</td>
                                           <td>30</td>
                                           <td>2010/07/14</td>
                                           <td>$5,300</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Shad Decker</td>
                                           <td>Regional Director</td>
                                           <td>Edinburgh</td>
                                           <td>51</td>
                                           <td>2008/11/13</td>
                                           <td>$5,300</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Michael Bruce</td>
                                           <td>Javascript Developer</td>
                                           <td>Edinburgh</td>
                                           <td>29</td>
                                           <td>2011/06/27</td>
                                           <td>$4,080</td>
                                       </tr>
                                       <tr>
                                           <td></td>
                                           <td>Donna Snider</td>
                                           <td>System Architect</td>
                                           <td>New York</td>
                                           <td>27</td>
                                           <td>2011/01/25</td>
                                           <td>$3,120</td>
                                       </tr>
                                       </tbody>
                                   </table>-->




                                   <div class="row "  >
                                       <div class="col-xs-10 col-xs-push-1 col-lg-8 col-lg-push-2" style=" background: white;">
                                           <div class="box-header"  >

                                               <div class="row">
                                                   <div class="col-xs-5 col-xs-push-5">
                                                       <a href="#" style="    margin-top: 12px;" class="btn   btn-primary"><i class="material-icons">&#xE863;</i> <span>Refresh List</span></a>
                                                   </div>
                                               </div>
                                           </div><!-- /.box-header -->
                                           <div class="box-body col-xs-11 col-xs-pull-0 col-lg-11 col-lg-push-1">
                                               <table  id="example" class="   table display responsive" width="100%" cellspacing="0" >
                                                   <thead>
                                                   <tr>

                                                       <th>#</th>
                                                       <th>users</th>
                                                       <th>tel</th>
                                                       <th>email</th>
                                                       <th>cv</th>
                                                       <th>ID_card</th>

                                                   </tr>
                                                   </thead>
                                                   <tbody>
                                                   <?php   for($r=0;$r<count($all_users);$r++) {
                                                       // $t=;

                                                       ?>
                                                       <tr>
                                                           <td> </td>

                                                           <td>


                                                               <div class="col-xs-6">
                                                                   <img src="<?php   echo $all_users[$r][1]  ;?>" class="avatar" style="width: 44px;" alt="Avatar">

                                                               </div>

                                                               <div class="col-xs-6">
                                                                   <div class="name" style="    font-size: small;">  <?php   echo $all_users[$r][0]  ;?></div>

                                                                   <div class="mood" style="    font-size: small;"> <?php   echo $all_users[$r][3]  ;?></div>


                                                               </div>





                                                           </td>
                                                           <td><?php   echo $all_users[$r][4]  ;?></td>
                                                           <td><?php   echo $all_users[$r][5]  ;?></td>
                                                           <td>

                                                               <span> <a href="<?php   echo  $all_users[$r][2]  ;?>"  class="user_info_1" target="_blank" ><i class="fa fa-download fa-1x" aria-hidden="true" style="color: #3c5eb5;"></i></a></span>

                                                           </td>
                                                           <td><?php   echo $all_users[$r][6]  ;?></td>
                                                       </tr>
                                                   <?php  }?>

                                                   </tbody>
                                               </table>

                                           </div><!-- /.box-body -->

                                       </div>


                                   </div><!-- /.box -->








                           </div>
                    </div>
                    <!--end info table user   -->
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

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
<script>
    $(document).ready(function(){
        $('[data-toggle="offcanvas"]').click(function(){
            $("#navigation").toggleClass("hidden-xs");
        });
   /*     $(document).ready(function() {

            var table = $('#display_user').DataTable();

           // table.css( 'display', 'table' );

          //  table.responsive.recalc();
            $( table.column( 2 ).header() ).addClass( 'never' );

            table.responsive.rebuild();
            table.responsive.recalc();
            table.DataTable()
                .columns.adjust()
                .responsive.recalc();
        } );*/

        $(document).ready( function () {
            var table = $('#example').DataTable({
                responsive: {
                    details: {
                        type: 'column'
                    }
                },
                columnDefs: [ {
                    className: 'control',
                    orderable: false,
                    targets:   0
                } ],
                order: [ 1, 'asc' ]
            });
            table.DataTable()
                .columns.adjust()
                .responsive.recalc();

        } );

    });

</script>


</body>
</html>