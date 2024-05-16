<!DOCTYPE html>
<html>
<head>
	<title></title>
<style> 
#div{
	width: 80%;
	height: 500px;
	margin: 0 auto;
	position: relative;
}
#slider{
	width: 42%;
	height: 506px;
	position: absolute;
	margin-left: 650px;
	transform: translate(-50%, -50%);
	background-image: url('aa.jpg');
	background-size: 100% 100%;
	box-shadow: 1px 2px 10px white;
	animation: slider 9s infinite linear;
	
}

@keyframes slider{
	0%{background-image: url('ab.jpg');}
	35%{background-image: url('ac.jpg');}
	75%{background-image: url('ad.jpg');}
	100%{background-image: url('ae.jpg');}
}

</style>
</head>
<body>
<siv id="div">
<div id="slider"> 

</div>
</siv>
</body>
</html>