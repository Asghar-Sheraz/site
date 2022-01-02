<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="running, long distance running, ultraman, ultraathelete" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="description" content="Hello and welcome to our website!
My name is Sheraz Asghar and my life is all about reaching the finish line under the most extreme conditions.  My brother Ibrahim and I are ultra athletes – marathon runners who are always trying to challenge ourselves to run in races only a few people would dare try. 
We have decided to create this website so people can check out our next set of extreme challenges that we have set for ourselves as we Gump Away to the finish line. Watch us as we train between races, gear up for our next challenge and check out our results as we scratch one more race off our list.Each of these races is leading up to our ultimate challenge – to one day run across Canada for charity. Each race helps us get closer to our Gump Away Across Canada goal. If you wish to help us in our next race, please click on the button to donate and lend a hand in participating in the most difficult races in the world.">
<title>Gump Away - Photos</title>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script> 
<?php 
$page = 'photos';
?>
<?php include 'includes/headContent.php'; ?>
<script src="js/getFlickrFeed.js"></script>

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
            <a href="http://www.gumpaway.com"><img src="images/logoGW.png" alt="Gump Away" title="Gump Away"  border="0"  /></a>
        </div>
    	<div class="photoContent">
            <div class="fb-like" data-href="http://www.gumpaway.com" data-send="true" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial" style="z-index:999999;"></div>
            <div class="slider">
				<?php include 'includes/counter.php'; ?>
            </div>
		</div>
<?php include 'includes/menu.php'; ?>
        
        <div class="photoMenu">
            <ul class="tabs">
                    <li><a class="active year" data-photoId="72157643593418984" href="">2014</a></li>
                <li><a class="year" data-photoId="72157632658134346" href="">2013</a></li>
                <li><a class="year" data-photoId="72157632284477743" href="">2012</a></li>
                <li><a class="year" data-photoId="72157632284232920" href="">2011</a></li>
                <li><a class="year" data-photoId="72157632389302217" href="">2010</a></li>
                <li><a class="year" data-photoId="72157632393422720" href="">2009</a></li>
                <li><a class="year" data-photoId="72157632393424908" href="">MISC</a></li>
            </ul>
            <div id="image-container"></div>
        </div>
</div>
</body>
</html>
