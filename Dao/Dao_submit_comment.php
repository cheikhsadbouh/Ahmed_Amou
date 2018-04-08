<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikh
 * Date: 08/04/2018
 * Time: 06:06
 */




include(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/Dao/logging.php');
require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/Dao/cnxn.php');
require(dirname( dirname(dirname(__FILE__))).'/Ahmed_Amou/Dao/Dao_add_notification.php');

function Dao_submit_comment($commnet,$id_post,$iduser){
    // session_start();
    $conn = open_cnxn();
    global $log;
    $posts = array();
    date_default_timezone_set('Africa/Nouakchott');
    $date =date("d/m/y h:i:s");
    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {

        $sql = "INSERT INTO comment (id_post,id_user,msg,time) VALUES ('$id_post','$iduser','$commnet','$date')";

        if (mysqli_query($conn, $sql))
        {
            $id_comment = mysqli_insert_id($conn);


            $log->info("before testtttttttttttttttttttt");
            if(get_post_owner($id_post) != $iduser){
                $log->info(" inside if ----> before user != session");
                echo Dao_add_notification(get_post_owner($id_post),$id_comment);
            }else{
                $log->info(" inside else ----  >before user == session");

               echo get_all_notifcation(get_post_owner($id_post));


            }



        } else
        {

            $log->error("Error " . $sql . "\n" . mysqli_error($conn));
        }

    }
    echo "";
}


function get_post_owner($id_post){
    //  session_start();
    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }
    if ($conn) {

        $sql = "SELECT * FROM posts where  id_post='$id_post'";



            if($result = mysqli_query($conn, $sql)){
                if ($result->num_rows > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                        return $row["id_user"];
                    }
                }
            } else {

            $log->error("Error " . $sql . "\n" . mysqli_error($conn));
        }

    }
    return "";
}
