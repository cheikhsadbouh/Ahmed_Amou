<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 07/04/2018
 * Time: 13:05
 */
require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/Dao/Dao_get_All_posts.php');

function Metier_get_All_posts(){

    return Dao_get_All_post();
}
