$(".button-collapse").sideNav({menuWidth:285}); 
			

            carousel();
			function carousel() {
					$(document).ready(function(){
                    $('.carousel.carousel-slider').carousel({fullWidth: true});
			 });
			 $('.carousel').carousel('next');
			setTimeout(carousel,2000);	
			}