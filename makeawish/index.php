<!doctype html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<title>Gumpaway - Make A Wish</title>
<meta name="description" content="I am Sheraz Asghar And I am attempting to bike and run across Canada. In the past, I have done a few extreme races, that proved to be mentally and physically rewarding. Now I want to do something more . . . something more meaningful I think . . . so the best place to start is by helping our children. I'm collaborating with Make A Wish foundation on this venture. All proceeds will be aimed at helping kids to have a better future . . . . . . . . so Cheers & Thanks!" />
<meta name="keywords" content="running long distance running ultraman ultraathelete ultra marathon  make a wish" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<?
include_once "../includes/mobileDetect.php";

$date = date('Y-m-d');
if ($date>"2016-07-14"){
		$biking="block";
		$notbiking="none";
	}
	else  {
		$biking="none";
		$notbiking="block";
		
		}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.animate-enhanced.min.js"></script>
<script src="../js/counterFrom.js"></script>
<script src="../countdown/js/countdown.js"></script>
<link rel="stylesheet" href="../cssMAW/shared.css">
<link rel="stylesheet" media="only screen and (min-width: 0px) and (max-width: 640px)" href="../cssMAW/iphone.css">
<link rel="stylesheet" media="only screen and (min-width: 641px) and (max-width: 1024px)" href="../cssMAW/ipad.css">


</head>

<body>
<?php include_once("../analyticstracking.php") ?>
<div class="mainContainer">
    <ul>
    	<li class="menuCont">
			<?php include_once("../includes/menuMAW.php") ?>
        </li>
        <li class="contentCont">
            <ul class="content">
                <li>
                    <h1>Biking Across Canada</h1>
                </li>
                <li id="countup" class="startedBiking" style="display:<? echo $biking?>;">
                	<!--p class="dateName">DAY</p><p class="dateNum" id="days">00</p-->
                	<p class="dateName">FINISHED ON 42nd DAY</p>
                </li>
                <li style="display:<? echo $notbiking?>;">
                    <?php include '../includes/counterMAW.php'; ?>
                </li>
                <li class="raceHighlites">
                    July 15th 2016 0700am | Vancouver - Halifax | 6321km | 30 - 45 days
                </li>
                <li class="welcomeText">
                	<ul>
                    	<li class="paraOne">
	                		<h1>I am Sheraz Asghar,</h1>
                            <p>And I am attempting to bike and run across Canada. In the past, I have done a few extreme races, that proved to be mentally and physically rewarding. Now I want to do something more . . . something more meaningful I think . . . so the best place to start is by helping our children. I'm collaborating with Make A Wish foundation on this venture. All proceeds will be aimed towards the happiness of our children . . . . . . . . so Cheers & Thanks!
                            </p>
                        </li>
                     </ul>    
                 </li>
                <li class="donate">
					<img src="../images/makeAWish.png" title="Make A Wish" />
                    <!--a href="https://cause2give.unxvision.com/P2PWeb/Default.aspx?EventId=1111&LanguageId=1" target="_blank">Help a kid</a-->
                    <a href="">EVENT CLOSED</a>
                </li>
            </ul>
        </li> 
        <li class="animationCont">
        	<img class="animGif" src="../images/<? echo $gif ?>.gif" />
        </li>
        <li class="raceInfo" >
        	<ul>
                <li class="upcomingRaces">
                    <h2>Upcoming Events</h2>
                    <ul>
                        <li class="date">TBD</li>
                        <li class="raceName">Cycling Americas - Fairbanks, Alaska, USA to Lago Escondido, Argentina - 22,500km</li>
                        <li class="link"><a href="">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">February 3rd 2019</li>
                        <li class="raceName">Yukon Arctic Ultra 450 miles</li>
                        <li class="link"><a href="http://www.arcticultra.de/en/" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">TBD - 2020</li>
                        <li class="raceName">Mount Everest - Top of the world</li>
                        <li class="link"><a href="">More info</a></li>
                    </ul>
                </li> 
                <li class="pastRaces">
                    <h2>Past Events</h2>
                    <ul>
                        <li class="date">July 15th 2016</li>
                        <li class="raceName">Bike and Run Across Canada - Vancouver to Halifax 6321km</li>
                        <li class="link"><a href="http://www.gumpaway.com/makeawish">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">May 23rd 2015</li>
                        <li class="raceName">Spartan Race 9.86km</li>
                        <li class="link"><a href="" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">September 8th 2014</li>
                        <li class="raceName">Haliburton Forest Race 100 miles</li>
                        <li class="link"><a href="http://www.haliburtonforest100.org/" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">August 3rd 2014</li>
                        <li class="raceName">Canadian Death Race 125K</li>
                        <li class="link"><a href="http://www.canadiandeathrace.com/" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">May 24th 2014</li>
                        <li class="raceName">Sulphur Springs Trail Run 100 miles</li>
                        <li class="link"><a href="http://www.burlingtonrunners.com/index.cfm?PAGEPATH=Club_Races/Sulphur_Springs_Trail_Run&ID=5711" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">May 18th 2014</li>
                        <li class="raceName">Color Me Rad  5KM</li>
                        <li class="link"><a href="https://www.colormerad.com/race/montreal" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">April 5th 2014</li>
                        <li class="raceName">Laura Secord Memorial 100 KM</li>
                        <li class="link"><a href="http://www.laurasecord100k.com/" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">September 8th 2013</li>
                        <li class="raceName">Haliburton Forest Race 100 miles</li>
                        <li class="link"><a href="http://www.haliburtonforest100.org/" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">August 3rd 2013</li>
                        <li class="raceName">Canadian Death Race 125K</li>
                        <li class="link"><a href="http://www.canadiandeathrace.com/" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">June 29th 2013</li>
                        <li class="raceName">Ultimate XC Quebec Edition 50K</li>
                        <li class="link"><a href="http://www.ultimatexc.com/trail-running.html" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">May 24th 2013</li>
                        <li class="raceName">Sulphur Springs Trail Run 100 miles</li>
                        <li class="link"><a href="http://www.burlingtonrunners.com/index.cfm?PAGEPATH=Club_Races/Sulphur_Springs_Trail_Run&ID=5711" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">February 3rd 2013</li>
                        <li class="raceName">Yukon Arctic Ultra 100 miles</li>
                        <li class="link"><a href="http://www.arcticultra.de/en.php?Race_Info:Race_Video" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">September 8th 2012</li>
                        <li class="raceName">Haliburton Forest Race 100 miles</li>
                        <li class="link"><a href="http://www.haliburtonforest100.org/" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">June 29 2011</li>
                        <li class="raceName">Ultimate XC Quebec Edition 58K Mont Tremblant</li>
                        <li class="link"><a href="http://www.ultimatexc.com/trail-running.html" target="_blank">More info</a></li>
                    </ul>
                    <ul>
                        <li class="date">June 29 2010</li>
                        <li class="raceName">Ultimate XC Quebec Edition 58K Mont Tremblant</li>
                        <li class="link"><a href="http://www.ultimatexc.com/trail-running.html" target="_blank">More info</a></li>
                    </ul>
                </li> 
            </ul>
        </li> 
        <li class="footer">
        	<ul>
            	<li><img src="../images/logo.png" title="Gumpaway.com" /></li>
                <li><a href="http://gumpaway.com/">gumpaway.com</a></li>
            </ul>
        </li> 
	</ul>
</div>

<?php include '../includes/socialBtn.php'; ?>
</body>
</html>