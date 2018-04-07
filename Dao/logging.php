<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 25/10/17
 * Time: 19:05
 */



/* logging */
//require "../logging/log4php/Logger.php";
require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/logging/log4php/Logger.php');
Logger::configure(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/config.properties');
$log = Logger::getLogger('myLogger');





