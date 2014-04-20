//JQuery below

$(document).ready(function() {


	

/////////////////////////////////////////////////////
///// Top banner rotator function following:::  /////

 

 // Middle fader for images
    $(".topbanner").cycle({ 
    fx:     'fade', 
    speed:   1500, 
    timeout: 1500, 
    pause:   1.3 
    });



////////  END OF Top banner rotator  ////////
/////////////////////////////////////////////



//////////////////////////////////////////////
//// initialize UI Tabs for Listings Page ////
  (function($) {
        var tabOpts = {
            hide: {
                effect: "drop",
                direction: "down",
                duration: 655
            },
            show: {
                effect: "drop",
                direction: "up",
                duration: 755
            }

        };
        $("#tabs").tabs(tabOpts);
 
    // fix the classes
    $( ".tabs-bottom .ui-tabs-nav, .tabs-bottom .ui-tabs-nav > *" )
      .removeClass( "ui-corner-all ui-corner-top" )
      .addClass( "ui-corner-bottom" );
 
    // move the nav to the bottom
    $( ".tabs-bottom .ui-tabs-nav" ).appendTo( ".tabs-bottom" );
    
    })(jQuery);

////	 END OF UI Tabs for Listings Page    ////
/////////////////////////////////////////////////




//////This section for pop up box with Realtor info on mouseover #realtyclick    
    //when mouse enters #realtyclick
    var mainContent = $("#pageOutlineContainer .outlinecontainerbackground");
   $("a.realtyclick").mouseenter(function() {
   $("#pageOutlineContainer").css( "opacity", "0.7" );
   $("#tooltip").css({
        top: $(this).offset().top - 274,
        left: $(this).offset().left + 320
    });
    $("#tooltip").css('z-index',1);
    $("#tooltip ").show();
	 return false;
  });
 
  //when mouse leaves #realtyclick
$("a.realtyclick").mouseleave(function() {
	$(window).scroll(function(){
   		$("#tooltip").hide();
   		$("#pageOutlineContainer").css( "opacity", "1" );
		});
	//just in case user clicks on #realtyclick
	$("#pageOutlineContainer").css( "opacity", "1" );
	$("a.realtyclick").click(function(){
		$("#tooltip").hide();
		$("#pageOutlineContainer").css( "opacity", "1" );
	});
	
   $("#tooltip").hide();
    
   });
   
//END OF pop up box Realtor section
  
$("#addnew_button").click(function(){
    window.location = "add_listing.php";
});

$("#logout_button").click(function(){
    window.location = "logout.php";
});

$('.button').hover(
    function(){
        $(this).css('background-color','#D3F5F5') ;
    },function() {
        $( this ).css('background-color','#eee') ;
    }
);

$('#upload_prompt_yes').click(function(){
           $('.message,.trans_background').hide();
           window.location.href='create_new_listing.php?add_images=TRUE';
});

$('#upload_prompt_no').click(function(){
    window.location.href='create_new_listing.php?add_images=FALSE';
});


});

//when admin user clicks 'delete' button to delete an existing listing, they are confirmed.
function ConfirmDeleteImage(listing_id,img_id,new_listing){
    if(confirm('Are you sure you wish to delete this image?')){
        // if confirmed, call deletion script and send provided 'listing_id'
        if(new_listing == 'TRUE'){
            
            window.location.href='delete.php?new_listing=' + new_listing + '&listing_id=' + listing_id + '&img_id=' + img_id + '&make_default=FALSE';
        } else {
            window.location.href='delete.php?listing_id=' + listing_id + '&img_id=' + img_id;
        }
        
    } else{
        // if user clicks cancel to delete prompt, return to page without  refresh
        return false;
    }
    
}

//when admin user clicks 'delete' button to delete an existing images, they are confirmed.
function ConfirmDelete(listing_id){
    if(confirm('Warning: If you delete this listing, all images associated with it will also be deleted. Are you sure you wish to continue?')){
        // if confirmed, call deletion script and send provided 'listing_id'
        window.location.href='delete.php?listing_id=' + listing_id;
    } else{
        // if user clicks cancel to delete prompt, return to page without  refresh
        return false;
    }
    
}