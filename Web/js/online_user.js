(function worker() {



    $.ajax({
        url: '/Ahmed_Amou/Metier/Metier_get_status_users.php',

        success: function(data) {
            console.log('getting users status   success.');
            console.log(data);

            if(data.length > 0){
                array = JSON.parse(data);
            }

            if(array.length > 0){
                $('#users ul').empty();

                for (var i=array.length -1;i>=0;i--) {
                    var check=array[i][2];
                    switch (check) {
                        case "online":
                            $("#users ul").append(' <li>  ' +
                                '                                <div class="user">\n' +
                                '                                    <div class="avatar">\n' +
                                '                                        <img src="'+array[i][1]+'" alt="User name">\n' +
                                '                                        <div class="status online"></div>\n' +
                                '                                    </div>\n' +
                                '                                    <div class="name">'+array[i][0]+'</div>\n' +
                                '                                    <div class="mood">'+array[i][3]+'</div>\n' +
                                '                                </div></li>');




                            break;
                        case "offline":
                            $("#users ul").append('   ' +
                                '                              <li>  <div class="user">\n' +
                                '                                    <div class="avatar">\n' +
                                '                                        <img src="'+array[i][1]+'" alt="User name">\n' +
                                '                                        <div class="status offline"></div>\n' +
                                '                                    </div>\n' +
                                '                                    <div class="name">'+array[i][0]+'</div>\n' +
                                '                                    <div class="mood">'+array[i][3]+'</div>\n' +
                                '                                </div></li>');

                            break;

                    }



                }





            }else{
                console.log("array empty");
            }
        },
        complete: function() {
            // Schedule the next request when the current one's


            setTimeout(worker, 5000);
        }
    });







})();