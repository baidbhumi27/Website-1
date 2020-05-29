$('.next-button').click(function(){
            $('.nav-tabs > .active').next('li').find('a').trigger('click');
            //trigger the click on the tab same like we click on the tab
        });

        $('.previous-button').click(function(){
            $('.nav-tabs > .active').prev('li').find('a').trigger('click');
            //trigger the click on the tab same like we click on the tab
        })
