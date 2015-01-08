<!-- <!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<a href="http://laravel.com" title="Laravel PHP Framework"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAACHCAYAAAA850oKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDoyNUVCMTdGOUJBNkExMUUyOTY3MkMyQjZGOTYyREVGMiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDoyNUVCMTdGQUJBNkExMUUyOTY3MkMyQjZGOTYyREVGMiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjI1RUIxN0Y3QkE2QTExRTI5NjcyQzJCNkY5NjJERUYyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjI1RUIxN0Y4QkE2QTExRTI5NjcyQzJCNkY5NjJERUYyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+g6J7EAAAEL1JREFUeNrsXQmU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" alt="Laravel PHP Framework"></a>
		<h1>You have arrived.</h1>
	</div>
</body>
</html>
 -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title> coming soon </title>

		<link href='http://fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">

		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
 	<style type="text/css">
 		/* some basic styles first */
body {
	width: 90%;
	height: 100%;
	margin: 0;
	padding: 0;
	font-family: "Open Sans", sans-serif;
	text-align: center;
	 padding: 40px;
	 background: #F5F5F5;
}

* {
	margin: 0;
	padding: 0;
}

marquee{
	color: #003580;
	font-family: "Open Sans", sans-serif;
	text-shadow:0px 1px 0px rgba(0,0,0,0.5);
-ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true)";zoom:1;
filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true);

  -moz-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
  -webkit-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
  box-shadow:0px 2px 2px rgba(0,0,0,0.2);
  -ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true)";
filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true);
}

 a.copyright { text-decoration: none; padding: 2px;background: #c0392b; color: #FFFFFF; margin-top: 100px; }
 a.copyright:hover { background: #f5f5f5; color: #757571; }

.container {
	width: 728px;
	margin: 60px auto 0;
	overflow: hidden;
}

.orange{
	color: #fc4f08;
	text-decoration: none;

}

h1 {
	font-family: 'Offside', cursive;
	color: #fc4f08;
	font-size: 45px;
	line-height: 80px;
}

h3{
	
	color: #fc4f08;
}

h1 span {
	color: #003580;
}

.left, .right {
	width: 250px;
}

.left {float: left; }
.right {float: right; }

p {
	color: #757571;
	margin: 20px 0;
	font-size: 13px;
}

a {
	color: #757571;
	text-decoration: none;
}

a:hover{
	color: #fc4f08;
}

ul li{
	font-size: 13px;
}

ul li a {
	background: #006178;
	width: 100%;
	display: block;
	margin: 5px 0;
	padding: 5px;
	transition: all 0.2s ease;
}

/* Some juicy hover effects */
ul li a:hover {
	color: #006178;
	background: white;
}


.button > p{
  font-family: 'Inconsolata', sans-serif;
  font-size: 15px;
  font-weight: 700;
}

.pad30{
	padding-top: 30px;
}

.pad25{
	padding-top: 25px;
}

.button {

  display: inline-block;
  height: 40px;
  min-width: 173px;
  line-height: 40px;
  padding-right: 30px;
  padding-left: 70px;
  position: relative;
  background-color:rgb(0,0,0);
  color:rgb(255,255,255);
  text-decoration: none;
  text-transform: lowercase;
  letter-spacing: 1px;
  margin-bottom: 15px;
  text-shadow:0px 1px 0px rgba(0,0,0,0.5);
-ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true)";zoom:1;
filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=1,Color=#ff123852,Positive=true);

  -moz-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
  -webkit-box-shadow:0px 2px 2px rgba(0,0,0,0.2);
  box-shadow:0px 2px 2px rgba(0,0,0,0.2);
  -ms-filter:"progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true)";
filter:progid:DXImageTransform.Microsoft.dropshadow(OffX=0,OffY=2,Color=#33000000,Positive=true);
}

.button:hover{
    text-decoration: none;
  color: #eeeaee;
}

.button p{font-size: 18px;}
.button span {
  position: absolute;
  left: 0;
  width: 50px;
  font-size:30px;
  -webkit-border-top-left-radius: 5px;
-webkit-border-bottom-left-radius: 5px;
-moz-border-radius-topleft: 5px;
-moz-border-radius-bottomleft: 5px;
border-top-left-radius: 5px;
border-bottom-left-radius: 5px;
border-right: 1px solid  rgba(0,0,0,0.15);
    text-decoration: none;
}

.button.twitter {
  background: #00acee;
}

.button.facebook {
 background: #3b5998;
}

.button.google-plus{
  background: #db4a39;
}

.text-center{
	text-align: center;
}

 	</style>
 </head>
 <body>
 	

		<div class="container">
			<h1>LARACMS<span>.com</span></h1>
			
			<!-- Now we'll add some information in two columns, so we'll use floats. -->
			<div class="text-center">
				<marquee behavior="alternate">We'll be launching our awesome website real soon.</marquee>
			</div>
			<div class="left">
				<div class="pad25"></div>
				
				<h3>About Us</h3>
				<p>
					We're a web development company set up in Lagos, Nigeria. With a few projects under our belt, we are striving to become the goto company for all things web &amp; application development.<br>
					We also believe in helping others grow by teaching tutorials, blogging about suffs that are helpful and so on.
				</p>
				
				<p>
					Here are companies we helped develop breathtaking websites
				</p>
				<a href="#" target="_blank" class="copyright">Melting Moments Desserts</a>
				
				<br><br>
				<a href="#" target="_blank" class="copyright">SoftRunner Couriers UK</a>
			</div>
			
			<div class="right">
			<div class="pad25"></div>	
				<h3>Get Social With Us</h3>
				<div class="pad25"></div>
				<a href="#" target="_blank" class="button facebook"><span><i class="icon-facebook"></i></span>find us on Facebook</a>
	  
	  			<a href="#" target="_blank" class="button twitter"><span><i class="icon-twitter"></i></span>follow us on Twitter</a>

	  			<a href="#" target="_blank" class="button google-plus"><span><i class="icon-google-plus"></i></span>+1 us on Google +</a>

	  			<p>
	  				<i class="icon-envelope orange"></i> : <span><a href="mailto:info@techcompanionng.com">info@laracms.com</a></span><br>
	  				<i class="icon-phone orange"></i> : 0815262xxxx <span class="orange">OR </span> 08143442xxx
	  			</p>

				
				<p>&copy; Copyright 2014. Laracms, All Rights Reserved.</p>
			</div>
		</div>

 </body>
 </html>