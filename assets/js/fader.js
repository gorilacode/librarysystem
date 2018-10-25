$(document).ready(function(){

	var count = 0;
	var images = ["http://localhost/library/assets/img/yctlib.jpeg","http://localhost/library/assets/img/girl.jpg","http://localhost/library/assets/img/library-photo.jpg"];
	// var images = ["http://localhost/nexcop/assets/img/core-img/logo.png","http://localhost/nexcop/assets/dashboard/custom/img/photo2.png","http://localhost/nexcop/assets/dashboard/custom/img/photo4.jpg","http://localhost/nexcop/assets/dashboard/custom/img/photo3.png"];
	var image = $(".fader");

	image.css("background","url("+images[count]+") no-repeat center/cover");

	setInterval(function(){
		image.fadeOut(500, function(){
			image.css("background-image","url("+images[count++]+") ");
			image.fadeIn(500);
		});
		if(count==images.length)
		{
			count = 0;
		}
	},5000);

});