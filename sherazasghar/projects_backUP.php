<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'projects';
include_once "includes/sharedPageContent.php";
include_once "includes/projectContent.php";
include_once "includes/meta.php";
?>
<title><? echo htmlentities($metaTitle) ?></title>
<meta name="description" content="<? echo htmlentities($metaContent) ?>">
<meta name="keywords" content="<? echo htmlentities($metaKeywords) ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="css/home.css">
<? include "includes/links.php" ?>
<? include "includes/socialNetworks.php" ?>
<? include 'includes/colorstyle.php' ?>
</head>
<body>
<? include 'includes/header.php'?>
<div  class="mainContainer">
    <div class="projectContainer">
    	<ul class="left">
        	<li class="list">
                <h2><? echo htmlspecialchars($projects) ?></h2>
                <p class="pHolder">
                    <a class="imgLink" href="minion.php?language=<? echo $langID ?>"> 
                        <img src="images/projects/minion.jpg">
                    </a>
                </p>
                <h3><? echo htmlspecialchars($vidTitle_minion) ?></h3>
                <?       	
                if(strlen($vidDesc_minion) > 300) $vidDesc_minion = substr($vidDesc_minion, 0, 300).'...';
                ?>
                <p class="desc"><? echo $vidDesc_minion ?></p>
                <a href="minion.php?language=<? echo $langID ?>"><? echo htmlspecialchars($seeProject) ?></a>
            </li>
        	<li class="list">
                <p class="pHolder">
                    <a class="imgLink" href="halo.php?language=<? echo $langID ?>">
	                    <img src="images/projects/spartan_0.jpg">
                    </a> 
                </p>
                <h3><? echo $vidTitle_mark6 ?></h3>
                <p class="desc"><? echo $vidDesc_mark6 ?></p>
                <a href="halo.php?language=<? echo $langID ?>"><? echo htmlspecialchars($seeProject) ?></a>
            </li>
        </ul>
        <ul class="right">
        	<li>
                <h2 class="artLiner"><? echo htmlspecialchars($artwork) ?></h2>
                <p class="pHolder">
                    <a class="imgLink" href="artwork.php?language=<? echo $langID ?>"> 
	                	<img src="images/projects/artwork.jpg">
                    </a>
                </p>
            </li>
            <li class="video_li">
                <h2><? echo htmlspecialchars($recentVideos) ?></h2>
                <ul>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="videos.php?language=<? echo $langID ?>&vid_ID=minion">
	                            <img src="images/videoImgContent/vid_thumb_minion.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($vidTitle_minion) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="videos.php?language=<? echo $langID ?>&vid_ID=pegasus">
                            	<img src="images/videoImgContent/vid_thumb_pegasus.jpg">
                            </a>
		                </p>
		                <h3><? echo htmlspecialchars($vidTitle_pegasus) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="videos.php?language=<? echo $langID ?>&vid_ID=earlyConcept">
                            	<img src="images/videoImgContent/vid_thumb_earlyConcept.jpg">
		                	</a>
                        </p>
		                <h3><? echo htmlspecialchars($vidTitle_earlyConcept) ?></h3>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="projectContainer_2">
		<ul>
        	<li class="list_2"><a class="linkAnim about" href="about.php"><h2 class="title_about"><? echo htmlspecialchars($about) ?></h2></a></li>
        	<li class="list_2"><a class="linkAnim lab" href="lab.php"><h2 class="title_lab"><? echo htmlspecialchars($lab) ?></h2></a></li>
        	<li class="list_2"><a class="linkAnim contact" href="contact.php"><h2 class="title_contact"><? echo htmlspecialchars($contact) ?></h2></a></li>
        </ul>
    </div>

	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















