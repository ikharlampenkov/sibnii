
        $(document).ready(function(){
		
            $('#mainmenu .menu li').hover(
                function() {
				    $(this).find('ul:first').slideDown(400);
                 
                    $(this).find('a:first').addClass("hover");
                },
                function() {
                    $(this).find('ul:first').slideUp(400);
					
                    $(this).find('a:first').removeClass("hover");
					
                }
            );
			
			

			 // slider --

    var elems = $("#cont ul li");

    var contw = 139;
    var contw_photo = 164;

    var cont_width = (elems.length)*contw;
    var cont_width_photo = (elems.length)*contw_photo;

    var current_elem = 0;

    var speed = 500;

    

    $("#clients_slider #cont ul").css('width',cont_width+"px");
    $("#photo_slider #cont ul").css('width',cont_width_photo+"px");

    

    $("#clients_slider .slider .arrr").click(function() {

        current_elem++;

    if (current_elem != elems.length-2) $("#cont ul").animate( { marginLeft: current_elem*-contw }, { duration:speed } );
	else  current_elem--;

    });

    $("#clients_slider .slider .arrl").click(function() {

        current_elem--;
        
		if (current_elem >= 0) $("#cont ul").animate( { marginLeft: current_elem*-contw }, { duration:speed } );
		else   current_elem++;

    });
    ///////////

    $("#photo_slider .slider .arrr").click(function() {

        current_elem++;

    if (current_elem != elems.length-4) $("#cont ul").animate( { marginLeft: current_elem*-contw_photo }, { duration:speed } );
	else  current_elem--;

    });

    $("#photo_slider .slider .arrl").click(function() {

        current_elem--;

		if (current_elem >= 0) $("#cont ul").animate( { marginLeft: current_elem*-contw_photo }, { duration:speed } );
		else   current_elem++;

    });

    // -- slider
			
			
			
			
        });
