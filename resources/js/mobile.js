require('./bootstrap');

// $(window).scroll(function(){
//     $('nav').toggleClass('bg-black', $(this).scrollTop() > 500);
// });
$(document).ready(function(){
	$(window).scroll(function(){
        if($(this).scrollTop() > 550){
            $('#topBtn').fadeIn();
           
        } else {  
        
            $('#topBtn').fadeOut();
        }
    });

    $("#topBtn").click(function(){
       $('html, body').animate({scrollTop: 0}, 800);

    });
})