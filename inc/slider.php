<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">	

		@import url('https://fonts.googleapis.com/css?family=Just+Another+Hand');

body, html {
	width: 100%;
	height: 100%;
	margin: 0;
	font-family: 'Just Another Hand', cursive;
	overflow-X: hidden;
}


.container {
	margin: 0 auto;
	margin-top: 20px;
	position: relative;
	width:70%;
	height: 0;
	padding-bottom: 40%;
	user-select: none;
	background-color: #1c1c1c;
	box-shadow: box-shadow;}

	.input {
		display: none;
	}

	.slide_img {
		position: absolute;
		width: 100%;
		height: 100%;
		z-index: -1;}

		img {
			width: inherit;
			height: inherit;
		}

		.prev, .next {
			width: 12%;
			height: inherit;
			position: absolute;
			top: 0;
			background-color: rgba(255, 82, 82, .2);;
			z-index: 99;
			transition: .45s;
			cursor: pointer;
			text-align: center;
		}
		.next {
			right: 0;
		}
		.prev {
			left: 0;
		}

		.prev:hover, .next:hover {
			transition: .3s;
			background-color: rgba(255, 82, 82, .8);;
		}

		.prev span, .next span {
			position: absolute;
			width: 0px;
			height: 0px;
			border: solid 20px;
			top: 50%;
			transform: translateY(-50%);
		}

		.prev span {
			border-color: transparent #fff transparent transparent;
			right: 35%;
		}
		.next span {
			border-color: transparent transparent transparent #fff;
			left: 35%;
		}
	}

	#nav_slide {
		width: 100%;
		bottom: 12%;
		height: 11px;
		position: absolute;
		text-align: center;
		z-index: 99;
		cursor: default;}

		.dots {
			top: -5px;
			width: 18px;
			height: 18px;
			margin: 0 3px;
			position: relative;
			border-radius: 100%;
			display: inline-block;
			background-color: rgba(0, 0, 0, 0.6);
			transition: .4s;
			cursor: pointer;

		}
		
#dot1:hover {background:brown;}
#dot2:hover {background: magenta;}
#dot3:hover {background: blue;}
#dot4:hover {background: green;}

#i1:checked ~ #one,
#i2:checked ~ #two,
#i3:checked ~ #three,
#i4:checked ~ #four {
	z-index: 9;
	animation: scroll 1s ease-in-out;
}

#i1:checked ~ #nav_slide #dot1 {background: brown;}
#i2:checked ~ #nav_slide #dot2 {background: magenta;}
#i3:checked ~ #nav_slide #dot3 {background: blue;}
#i4:checked ~ #nav_slide #dot4 {background: green;}



@keyframes scroll {
	0% { opacity: .4;}
	100% { opacity: 1;}
}

@media screen and (max-width: 685px) {
	.container {
		border: none;
		width: 100%;
		height: 0;
		padding-bottom: 55%;}

		
			.prev, .next {
				width: 15%;
			}

			.prev span, .next span {
				border: solid 12px;
			}
			.prev span {
				border-color: transparent #fff transparent transparent;
			}
			.next span {
				border-color: transparent transparent transparent #fff;
			}
		

		#nav_slide .dots {
			width: 12px;
			height: 12px;
		}
	

}

.yt{
	margin: 0 auto;
	margin-top: 30px;
	width: 80px;
	height: 40px;
	border-radius: 4px;
	text-align: center;
	background: $blue;
	box-shadow: $box-shadow;
	transition: .4s;
	opacity: .4;}
	
a{
		position: relative;
		text-decoration: none;
		color: #fff;
		font-size: 23px;
		top: 4px;
	
}

.yt:hover{
	transition: .3s;
	box-shadow: none;
	opacity:.8;
}




	</style>


</head>
<body>


<div class="container">
	

	<input class="input" type="radio" id="i1" name="images" checked/>
	<input class="input" type="radio" id="i2" name="images" />
	<input class="input" type="radio" id="i3" name="images" />
	<input class="input" type="radio" id="i4" name="images"  />
	
	<div class="slide_img" id="one">			
			
			<img src="1.jpg">
			
				<label class="prev" for="i4"><span></span></label>
				<label class="next" for="i2"><span></span></label>	
		
	</div>
	
	<div class="slide_img" id="two">
		
			<img src="2.jpg" >
			
				<label class="prev" for="i1"><span></span></label>
				<label class="next" for="i3"><span></span></label>
		
	</div>
			
	<div class="slide_img" id="three">
			<img src="3.jpg">	
			
				<label class="prev" for="i2"><span></span></label>
				<label class="next" for="i4"><span></span></label>
	</div>


	<div class="slide_img" id="four">
			<img src="4.jpg">	
			
				<label class="prev" for="i3"><span></span></label>
				<label class="next" for="i1"><span></span></label>

	</div>

	<div id="nav_slide">
		<label for="i1" class="dots" id="dot1"></label>
		<label for="i2" class="dots" id="dot2"></label>
		<label for="i3" class="dots" id="dot3"></label>
		<label for="i4" class="dots" id="dot4"></label>
	</div>
		
</div>


<div class="yt">
	<a href='https://www.youtube.com/watch?v=z74ExMz-cWU' target="_blank"> See Video
</a>
</div>



</body>
</html>