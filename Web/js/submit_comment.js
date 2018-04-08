$(document).ready(function() {







  /*  $('.submit_comment').bind('click', function(e) {
        e.preventDefault();

        for(var i = 0; i < $(".comment_value").length; i++){
            console.log($($(".comment_value")[i]).val());
        }
            //console.log($(".comment_value").serialize());
            console.log("btn");

    });*/


});
function submit_comment(id_post,id_user,comment){


    $.ajax({
        type : 'POST',
        data: {'comment':comment,'id_post':id_post,'iduser':id_user},
        url : '/Ahmed_Amou/Metier/Metier_submit_comment.php',
        success : function(data){
            console.log('submit success.');
           // location.reload();

            var array = JSON.parse(data);
            if(array.length > 0){
                $('#generique ul').empty();
                for (var i=array.length -1;i>=0;i--) {
                    var check=array[i][4];
                    $("#generique ul").append(' <li class="left clearfix">\n' +
                        '                    \t<span class="chat-img pull-left">\n' +
                        '                    \t\t<img src='+array[i][3]+' alt="User Avatar">\n' +
                        '                    \t</span>\n' +
                        '                                <div class="chat-body clearfix">\n' +
                        '                                    <div class="header">\n' +
                        '                                        <strong class="primary-font">'+array[i][4]+'</strong>\n' +
                        '                                        <small class="pull-right text-muted"><i class="fa fa-clock-o"></i>'+array[i][2]+'</small>\n' +
                        '                                    </div>\n' +
                        '                                    <p>\n' +
                        '                                  ' +array[i][1]+
                        '                                    </p>\n' +
                        '                                </div>\n' +
                        '                            </li>');

                    var unread="unread";
                    if (check.localeCompare(unread)) {
                        Notification.requestPermission().then(function(result){
                            notify();
                        });
                        var noti_title="" +array[i][4] +"";
                        var noti_img="" +array[i][3] +"";
                        var noti_msg="" +array[i][1] +"";
                        function notify() {
                            var notification = new Notification(noti_title, {
                                icon: noti_img,
                                body: noti_msg

                            });
                            var s="<audio autoplay='true'> <source src='../notification_sound/notification.mp3'></audio>";
                            $('body').append(s);
                            notification.onclick = function () {
                                //  window.open("");
                            };
                            setTimeout(notification.close.bind(notification), 30000);
                        }
                    }else{
                        console.log("read");
                    }



                }
            }else{
console.log("array empty");
            }




        },
        error: function (data) {
            console.log('An error occurred.');
            console.log(data);
        }


    });

}
function test_submit(id_post,id_user){
    var  commment='';
    var checker=0 ;
    var inp=$('.comment_value');
    for(var i = 0; i < inp.length; i++){
        if($.trim($(inp[i]).val())){
            commment=$(inp[i]).val();
            console.log($(inp[i]).val());
            checker=1;
        }


    }
    if(checker == 1){
        checker=0 ;
        submit_comment(id_post,id_user,commment);

    }
}