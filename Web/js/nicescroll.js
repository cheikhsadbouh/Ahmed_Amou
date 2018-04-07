// When the DOM is ready, run this function

    $(function(){
        $(".chat").niceScroll();


    });
    $(function(){
        $(".scrollable").niceScroll();
        $('#myAffix').affix({
            offset: {
                top: 100,
                bottom: function () {
                    return (this.bottom = $('.footer').outerHeight(true))
                }
            }
        })

    });
