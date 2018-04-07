$(document).ready(function() {





    function submit_post(){


        $.ajax({
            type : 'POST',
            data: {'post':$("#mytextera").val()},
            url : '/Ahmed_Amou/Metier/Metier_submit_post.php',
            success : function(data){
                console.log('submit success.');
                location.reload();
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            }


        });

    }
    $('#submit_post').on('click', function() {

        if (!$.trim($("#mytextera").val())) {

        }else{
            submit_post();
            //console.log($("#mytextera").val());
        }
    });

});