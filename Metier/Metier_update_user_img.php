<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 22/04/2018
 * Time: 14:05
 */


require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/Dao/Dao_update_user_img.php');
function Metier_update_user_img(){
    echo Dao_update_user_img($_FILES);
}

Metier_update_user_img();