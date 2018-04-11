<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 09/04/2018
 * Time: 14:16
 */

require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/Dao/Dao_update_notification_statuts.php');
function Metier_update_notification_statuts(){
    global  $log ;

   // $log->info("post : ".$_POST['post']);

    Dao_update_notification_statuts($_POST['id_notif']) ;
}

Metier_update_notification_statuts();