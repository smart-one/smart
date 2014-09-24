/**
* ---------------------------------------------------------------------------------------------------------------------------------------
* Main js functionality
* ---------------------------------------------------------------------------------------------------------------------------------------
*/

$(document).ready(function(){

    $("input[type='phone']").mask("+7 (999) 999-9999");

    $(".expand_link").hover(function(){
    	$(".expand").stop(true, true).fadeToggle(400);
    })
    .click(function(e){
    	e.preventDefault();
    });



    $("#order_form_container").find(".detailed").click(function(e){
    	e.preventDefault();
    	$(this).closest("#order_form").find(".detailed_form").slideToggle(400);
    });

    $("#order_phone")
    	.focusin(function(e){
    		$(this).next(".label").fadeOut(400);
    	})
    	.focusout(function(e){
    		$(this).next(".label").fadeIn(400);
    	});

    $("#order_phone").next(".label").click(function(e){
    	$(this).prev("input").focus();
    });

    /**
    * ---------------------------------------------------------------------------------------------------------------------------------------
    * Magnific PopUp Specifics
    * ---------------------------------------------------------------------------------------------------------------------------------------
    */

    $('.magnific').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a', // the selector for gallery item
            type: 'image',
            gallery: {
              enabled:true
            }
        });
    }); 


    /**
    * ---------------------------------------------------------------------------------------------------------------------------------------
    * Site scrolling
    * ---------------------------------------------------------------------------------------------------------------------------------------
    */
    var scrollView = $("body");

    $("#topContainer").on("click", ".scrollTo", function(e){

        var destination = $(this).attr('href');
               
        if(destination.indexOf("modal") >= 0){
            
        console.log(destination);
        return true;
        }

        e.preventDefault();

        scrollView.animate({scrollTop: $(destination).position().top-68}, 600);

        
    });

});
