<!doctype html>
<html>
<head>
<?

$pageID="home";
include 'includes/meta.php';
?>
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/superslides.css">

<?
include 'includes/links.php';
?>
</head>
<body>
<? include 'includes/header.php'?>
    <div class="banner">
        <div id="slides">
        	<img class="bannerLogo" src="images/shared/aandlrenovationlogo.png" title="A and L Renovation" />
            <div class="slides-container">
                <img src="images/homepage/banner_3.jpg" title="A and L Renovation and Design" />
                <img src="images/homepage/banner_1.jpg" title="A and L Renovation and Design" />
                <img src="images/homepage/banner_2.jpg" title="A and L Renovation and Design" />
            </div>
            <nav class="slides-navigation">
                <a href="#" class="next"></a>
                <a href="#" class="prev"></a>
            </nav>
        </div>
    </div>
    <div class="container">
        <ul class="about">
            <li class="heading">
                <h1><? echo htmlspecialchars($heading) ?></h1>
				<span></span>
                <h2><? echo htmlspecialchars($since) ?></h2>
            </li>
            <li class="content">
            	<ul class="talk">
                	<li>
                    	<h2><? echo htmlspecialchars($started) ?></h2>
                    	<? echo ($startedText) ?>
                    </li>
                </ul>
            	<ul class="projects">
                	<li class="title">
                    	<h2><? echo htmlspecialchars($ourWork) ?></h2>
                    </li>
                	<li class="icon">
                    	<p>
                        	<a href="projects.php<? echo $n ?>&projectNUM=p4"><img src="images/homepage/icon_4.jpg" title="Project icon"/></a>
                            <span><? echo htmlspecialchars($project) ?><br /><? echo htmlspecialchars($p4) ?></span>
                        </p>
                    </li>
                	<li class="icon">
                    	<p>
                        	<a href="projects.php<? echo $n ?>&projectNUM=p1"><img src="images/homepage/icon_1.jpg" title="Project icon"/></a>
                            <span><? echo htmlspecialchars($project) ?><br /><? echo htmlspecialchars($p1) ?></span>
                        </p>
                    </li>
                	<li class="icon">
                    	<p>
                        	<a href="projects.php<? echo $n ?>&projectNUM=p6"><img src="images/homepage/icon_6.jpg" title="Project icon"/></a>
                            <span><? echo htmlspecialchars($project) ?><br /><? echo htmlspecialchars($p6) ?></span>
                        </p>
                    </li>
                	<li class="icon desktop">
                    	<p>
                            <a href="projects.php<? echo $n ?>">	</a>
                            <span><? echo htmlspecialchars($seeAllProjects) ?></span>
                        </p>
                    </li>
                	<li class="icon mobile">
                        <a href="projects.php<? echo $n ?>"><? echo htmlspecialchars($seeAllProjects) ?></a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="beforeAndAfter">
        	<li class="text">
				<h2><? echo htmlspecialchars($itWas) ?></h2>
				<h2 class="green"><? echo htmlspecialchars($itIs) ?></h2>            	
            </li>
            <li class="circle">
				<img class="circleWhite" src="images/shared/circleGreen.png"  />
            <li>
        </ul>
        <ul class="help">
            <li class="heading">
                <h1><? echo htmlspecialchars($help) ?></h1>
                <span></span>            	
                <h2><? echo htmlspecialchars($helpText) ?></h2>
            </li>
            <li class="links">
            	<a href="projects.php<? echo $n ?>&projectTYPE=bs"><? echo htmlspecialchars($basements) ?></a>
            	<a href="projects.php<? echo $n ?>&projectTYPE=ki"><? echo htmlspecialchars($kitchens) ?></a>
            	<a href="projects.php<? echo $n ?>&projectTYPE=ba"><? echo htmlspecialchars($bathrooms) ?></a>
            	<a class="linkChg" ><? echo htmlspecialchars($decks) ?></a>
            </li>
        </ul>
        <ul class="onSite">
        	<li class="text">
				<h2><? echo htmlspecialchars($callOut) ?></h2>            	
            </li>
        </ul>
        <ul class="estimate">
            <li class="heading">
                <h1><? echo htmlspecialchars($estimate) ?></h1>
                <span></span>
                <h2><? echo htmlspecialchars($estimateText) ?></h2>
                <h2 class="info">514 831 3332	 - <a href="">info@alreno.com</a></h2>
                <a class="fb" href="https://m.facebook.com/story.php?story_fbid=587503971436128&id=467497966770063"></a>
                <h2 class="fbTalk"><? echo htmlspecialchars($fbText) ?></h2>
            </li>
        </ul>
        <ul class="btGraphic">
            <li class="map">
            	<img src="images/homepage/arrow.png" />
            </li>
            <li class="callOut">
	            <img  src="images/shared/placeholder.png" />
            	<span>
                	<h2><? echo htmlspecialchars($rediscover) ?></h2>
                </span>
            </li>
            <li class="shirt">
            </li>
        </ul>
		<? include 'includes/footer.php'?>
    </div>
</body>
</html>









































