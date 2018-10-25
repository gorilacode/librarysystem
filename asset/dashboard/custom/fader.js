$(document).ready(function(){

	var count = 0;
	var images = ["http://localhost/nexcop/assets/dashboard/custom/img/photo1.png","http://localhost/nexcop/assets/dashboard/custom/img/photo2.png","http://localhost/nexcop/assets/dashboard/custom/img/photo4.jpg","http://localhost/nexcop/assets/dashboard/custom/img/photo3.png"];
	var image = $(".fader");

	image.css("background-image","url("+images[count]+") no-repeat cover/center");

	setInterval(function(){
		image.fadeOut(500, function(){
			image.css("background-image","url("+images[count++]+")");
			image.fadeIn(500);
		});
		if(count==images.length)
		{
			count = 0;
		}
	},5000);

});