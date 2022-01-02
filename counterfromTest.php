<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>


</head>
<javascript>
    window.onload=function() {
      // Month,Day,Year,Hour,Minute,Second
      upTime('jan,01,2014,00:00:00'); // ****** Change this line!
    }
    function upTime(countTo) {
      now = new Date();
      countTo = new Date(countTo);
      difference = (now-countTo);
    
      days=Math.floor(difference/(60*60*1000*24)*1);
      hours=Math.floor((difference%(60*60*1000*24))/(60*60*1000)*1);
      mins=Math.floor(((difference%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
      secs=Math.floor((((difference%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
    
      document.getElementById('days').firstChild.nodeValue = days;
      document.getElementById('hours').firstChild.nodeValue = hours;
      document.getElementById('minutes').firstChild.nodeValue = mins;
      document.getElementById('seconds').firstChild.nodeValue = secs;
    
      clearTimeout(upTime.to);
      upTime.to=setTimeout(function(){ upTime(countTo); },1000);
    }
</javascript>

<body>

<div id="countup">
  It's been
  <p id="days">00</p>
  <p class="timeRefDays">days</p>
  <p id="hours">00</p>
  <p class="timeRefHours">hours</p>
  <p id="minutes">00</p>
  <p class="timeRefMinutes">minutes</p>
  <p id="seconds">00</p>
  <p class="timeRefSeconds">second</p>
</div>


</body>
</html>
