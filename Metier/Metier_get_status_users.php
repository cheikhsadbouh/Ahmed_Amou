<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 14/04/2018
 * Time: 11:59
 */

require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/Dao/Dao_get_status_users.php');
function Metier_get_status_users(){

    global  $log ;

    echo  Dao_get_status_users();
}
Metier_get_status_users();