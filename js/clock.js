	setInterval(function(){

		var date = new Date();
		updateTime(date);
		updateClock(date);

	},1000);

	function updateClock(date){
		var hour = document.getElementById("hour").style;
		var minute = document.getElementById("minute").style;
		var second = document.getElementById("second").style;

		second.transform = "rotate("+ (date.getSeconds()*6) +"deg)";
		minute.transform = "rotate("+ (date.getMinutes()*6) +"deg)";
		hour.transform = "rotate("+ (date.getHours()*30+date.getMinutes()*0.5) +"deg)";
	}

	function updateTime(date){

		var timeDiv = document.getElementById("time");
		var time = "time : "+date.getHours() + ": "+date.getMinutes() +": "+date.getSeconds();
		timeDiv.innerHTML = time;
	}