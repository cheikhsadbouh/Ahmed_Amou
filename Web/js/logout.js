$(document).ready(function() {



});

function logout(id){

    $.ajax({
        type : 'POST',
        data: {'id_user':id},
        url : '/Ahmed_Amou/Metier/Metier_logout.php',
        success : function(data){
            location.href="index.php";
        },
        error: function (data) {
            console.log('An error occurred logout .');
            console.log(data);
        }


    });
}