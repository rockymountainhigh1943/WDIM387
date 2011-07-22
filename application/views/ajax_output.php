<h1><?=$heading?></h1>
<p>The current (EST) date and time is <span id="date">?</span></p>
<p>It's also been <span id="time">?</span> seconds since January 1st, 1970!</p>

<script>
	var setDate = function() {
		$.getJSON("/ajax/date").then(function(data) {
			$("#date").text(data);
		});
	};
	
	var setTime = function(){
		$.getJSON("/ajax/time").then(function(data) {
			$("#time").text(data);
		});
	};
	
	setInterval(setDate, 1000);
	setInterval(setTime, 1000);
</script>