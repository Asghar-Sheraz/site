<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="running, long distance running, ultraman, ultraathelete" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="description" content="Hello and welcome to our website!
My name is Sheraz and my life is all about reaching the finish line under the most extreme conditions.  My brother Ibrahim and I are ultra athletes – marathon runners who are always trying to challenge ourselves to run in races only a few people would dare try. 
We have decided to create this website so people can check out our next set of extreme challenges that we have set for ourselves as we Gump Away to the finish line. Watch us as we train between races, gear up for our next challenge and check out our results as we scratch one more race off our list.Each of these races is leading up to our ultimate challenge – to one day run across Canada for charity. Each race helps us get closer to our Gump Away Across Canada goal. If you wish to help us in our next race, please click on the button to donate and lend a hand in participating in the most difficult races in the world.">
<title>Gump Away</title>
<?php 
$page = 'home';
?>
<head>
<?php include 'includes/headContent.php';
?>
</head>

<body class="bodyStyles">

    <div id="fb-root"></div>
	<script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="main">
    	<div class="bannerContent">
            <a href="http://www.gumpaway.com"><img src="images/logoGW.png" alt="Gump Away" title="Gump Away" border="0" /></a>
        </div>
    	<div class="photoContent">
            <div class="fb-like" data-href="http://www.gumpaway.com" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial" style="z-index:999999;"></div>
            <div class="slider">
				<?php include 'includes/counter.php'; ?>
            </div>
		</div>
<?php include 'includes/menu.php'; ?>
    <div class="item1">
	        <h2>Upcoming Races</h2>
            <div>
                <div>
                    <span class="month">Feb</span>
                    <span class="date"><p class="p1">03</p><p class="p2">2013</p></span>
                    <span class="desc">Yukon Arctic Ultra 100 miles</span>
                    <a class="linker" href="http://www.arcticultra.de/en.php?Race_Info:Race_Video">Link</a>
                </div>
                <div>
                    <span class="month">Jun</span>
                    <span class="date"><p class="p1">29</p><p class="p2">2013</p></span>
                    <span class="desc">Mont Tremblent XC 58K </span>
                    <a class="linker" href="http://www.ultimatexc.com/trail-running.html">Link</a>
                </div>
                <div>
                    <span class="month">Aug</span>
                    <span class="date"><p class="p1">24</p><p class="p2">2013</p></span>
                    <span class="desc">Canadian Death Race 125K</span>
                    <a class="linker" href="http://www.canadiandeathrace.com/">Link</a>
                </div>
                <div>
                    <span class="month">Sep</span>
                    <span class="date"><p class="p1">10</p><p class="p2">2013</p></span>
                    <span class="desc">Haliburton Forest Race 100 miles</span>
                    <a class="linker" href="http://www.haliburtonforest100.org/">Link</a>
                </div>
                <div>
                    <span class="month">TBD</span>
                    <span class="date"><p class="p1"></p><p class="p2"></p></span>
                    <span class="desc">Run Across Canada Coast to Coast</span>
                </div>
            </div>
        </div>
    	<div class="item2">
	        <h2>Past Races</h2>
            <div>
                <div>
                    <span class="month">Sep</span>
                    <span class="date"><p class="p1">10</p><p class="p2">2012</p></span>
                    <span class="desc">Haliburton Forest Race 100 miles</span>
                    <a class="linker" href="http://www.haliburtonforest100.org/">Link</a>
                </div>
                <div>
                    <span class="month">Aug</span>
                    <span class="date"><p class="p1">03</p><p class="p2">2011</p></span>
                    <span class="desc">Canadian Death Race 125K</span>
                    <a class="linker" href="http://www.canadiandeathrace.com/">Link</a>
                </div>
                <div>
                    <span class="month">Jun</span>
                    <span class="date"><p class="p1">29</p><p class="p2">2011</p></span>
                    <span class="desc">Mont Tremblent XC 58K </span>
                    <a class="linker" href="http://www.ultimatexc.com/trail-running.html">Link</a>
                </div>
                <div>
                    <span class="month">Jun</span>
                    <span class="date"><p class="p1">29</p><p class="p2">2010</p></span>
                    <span class="desc">Mont Tremblent XC 58K </span>
                    <a class="linker" href="http://www.ultimatexc.com/trail-running.html">Link</a>
                </div>
                <div>
                    <span class="month">Sep</span>
                    <span class="date"><p class="p1">22</p><p class="p2">2012</p></span>
                    <span class="desc">Montreal Marathon 42K</span>
                    <a class="linker" href="http://ca.competitor.com/montreal">Link</a>
                </div>
            </div>
        </div>
    	<div class="item3">
	        <h2>Goal</h2>
            <div>
                <div>
            		<div class="thermo"><div class="mercury"></div></div>
                    <span class="header">Yukon Arctic Ultra</span>
                    <ul>
	                    <li>2 runners 430miles- $22,000</li>
	                    <li>1 runner 430miles- $12,000</li>
	                    <li>1 runner 300miles- $9500</li>
	                    <li>1 runner 100miles - $6000</li>
                    </ul>
                    <span class="raised">Raised : $1560.00</span>
	              <a class="donate" href="http://fnd.us/c/aP3bb" target="_blank">DONATE</a>
                </div>
            </div>
        </div>
    	<div class="item5">
	        <h2>Thank You</h2>
            <div>
                <div>
                    <ul>
                    <li>MYS Education  <span>$50</span><br />Dec 12 2012</li>
                    <li>Stephan Madi  <span>$50</span><br />Dec 12 2012</li>
                    <li>Megabloks Bake sale  <span>$1460</span><br />Dec 6 2012</li>
                    </ul>
                </div>
            </div>
        </div>
    	<div class="item4">
	        <h2>About Us</h2>
            <div>
                <div><p>"Gump Away" [guhmp] [uh-wey].<br />
Relentlessly (or foolishly*) running to the finish line in the face of the most intense environments.<br />
*Only fools don't finish</p><p>Hello and welcome to our website!</p><p>My name is Sheraz and my life is all about reaching the finish line under the most extreme conditions.  My brother Ibrahim and I are ultra athletes – marathon runners who are always trying to challenge ourselves to run in races only a few people would dare try.</p><p>We have decided to create this website so people can check out our next set of extreme challenges that we have set for ourselves as we "Gump Away" to the finish line. Watch us as we train between races, gear up for our next challenge and check out our results as we scratch one more race off our list.</p><p>Each of these races is leading up to our ultimate challenge – to one day run across Canada for charity. </p><p>Each race helps us get closer to our "Gump Away Across Canada" goal. If you wish to help us in our next race, please click on the button to donate and lend a hand in participating in the most difficult races in the world.</p></div>
            </div>
        </div>
	</div>
</body>
</html>
