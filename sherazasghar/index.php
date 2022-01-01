<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'projects';
include_once "includes/sharedPageContent.php";
include_once "includes/projectContent.php";
include_once "includes/labContent.php";	
	
include_once "includes/meta.php";
?>
<title><? echo htmlentities($metaTitle) ?></title>
<meta name="description" content="<? echo htmlentities($metaContent) ?>">
<meta name="keywords" content="<? echo htmlentities($metaKeywords) ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="css/home.css">
<? include 'includes/favicon.php'?>
<meta name="theme-color" content="#ffffff">
<? include "includes/links.php" ?>
<? include "includes/socialNetworks.php" ?>
<? include 'includes/colorstyle.php' ?>
</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<div  class="mainContainer" style="display:<? echo $content ?>;">
    <div class="projectContainer">
    	<ul class="left">
        	<li class="list">
                <h2><? echo htmlspecialchars($projects) ?></h2>
				<p class="pHolder">
                    <a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=haloLapse"> 
                        <img src="images/videoImgContent/vid_thumb_haloLapse.jpg" />
                    </a>
                </p>
                <h3><? echo htmlspecialchars($vidTitle_haloLapse) ?></h3>
                <?
                if(strlen($vidDesc_haloLapse) > 1000) $vidDesc_haloLapse = substr($vidDesc_haloLapse, 0, 1000);
                ?>
                <p class="desc"><? echo $vidDesc_haloLapse ?></p>
                <a href="videoLoader.php<? echo $globalLink ?>&vid_ID=haloLapse"><? echo htmlspecialchars($seeProject) ?></a>
            </li>
        	<!--li class="list">
                <p class="pHolder">
                    <a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=neo"> 
                        <img src="images/videoImgContent/vid_thumb_neoShifters.jpg" />
                    </a>
                </p>
                <h3><? echo htmlspecialchars($vidTitle_neo) ?></h3>
                <?
                if(strlen($vidDesc_neo) > 1000) $vidDesc_neo = substr($vidDesc_neo, 0, 1000);
                ?>
                <p class="desc"><? echo $vidDesc_neo ?></p>
                <a href="videoLoader.php<? echo $globalLink ?>&vid_ID=neo"><? echo htmlspecialchars($seeProject) ?></a>
            </li-->
			<li class="list">
				
                <p class="pHolder">
                    <a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=magnext"> 
                        <img src="images/projects/magnext.jpg" />
                    </a>
                </p>
                <h3><? echo htmlspecialchars($vidTitle_magnext) ?></h3>
                <?
                if(strlen($vidDesc_magnext) > 1000) $vidDesc_magnext = substr($vidDesc_magnext, 0, 1000);
                ?>
                <p class="desc"><? echo $vidDesc_magnext ?></p>
                <a href="videoLoader.php<? echo $globalLink ?>&vid_ID=magnext"><? echo htmlspecialchars($seeProject) ?></a>
            </li>
        	<li class="list">
                <p class="pHolder">
                    <a class="imgLink" href="tnmt.php<? echo $globalLink ?>"> 
                        <img src="images/projects/tnmt.jpg" />
                    </a>
                </p>
                <h3><? echo htmlspecialchars($vidTitle_tnmt) ?></h3>
                <?
                if(strlen($vidDesc_tnmt) > 1000) $vidDesc_tnmt = substr($vidDesc_tnmt, 0, 1000);
                ?>
                <p class="desc"><? echo $vidDesc_tnmt ?></p>
                <a href="tnmt.php<? echo $globalLink ?>"><? echo htmlspecialchars($seeProject) ?></a>
            </li>
        	<li class="list">
                <p class="pHolder">
                    <a class="imgLink" href="lab_getExp.php?<? echo $globalLink ?>&exp_ID=machineOne&exp_Type=vid"> 
                        <img src="images/projects/machineOne.jpg" />
                    </a>
                </p>
                <h3><? echo htmlspecialchars($experiment_8_title) ?></h3>
                <?
                if(strlen($experiment_8_desc) > 1000) $experiment_8_desc = substr($experiment_8_desc, 0, 1000);
                ?>
                <p class="desc"><? echo $experiment_8_desc ?></p>
                <a href="lab_getExp.php?<? echo $globalLink ?>&exp_ID=machineOne&exp_Type=vid"><? echo htmlspecialchars($seeProject) ?></a>
            </li>
        	<li class="list">
                <p class="pHolder">
                    <a class="imgLink" href="minion.php<? echo $globalLink ?>"> 
                        <img src="images/projects/minion.jpg">
                    </a>
                </p>
                <h3><? echo htmlspecialchars($vidTitle_minion) ?></h3>
                <?       	
                if(strlen($vidDesc_minion) > 1000) $vidDesc_minion = substr($vidDesc_minion, 0, 1000);
                ?>
                <p class="desc"><? echo $vidDesc_minion ?></p>
                <a href="minion.php<? echo $globalLink ?>"><? echo htmlspecialchars($seeProject) ?></a>
            </li>
        	<li>
                <p class="pHolder">
                    <a class="imgLink" href="halo.php<? echo $globalLink ?>">
	                    <img src="images/projects/spartan_0.jpg">
                    </a> 
                </p>
                <h3><? echo $vidTitle_mark6 ?></h3>
                <p class="desc"><? echo $vidDesc_mark6 ?></p>
                <a href="halo.php<? echo $globalLink ?>"><? echo htmlspecialchars($seeProject) ?></a>
            </li>
			<li class="list">
                <p class="pHolder">
                    <a class="imgLink" href="http://www.gumpaway.com/makeawish" target="_blank"> 
                        <img src="images/projects/gumpaway.jpg" />
                    </a>
                </p>
                <h3><? echo htmlspecialchars($vidTitle_bike) ?></h3>
                <?       	
                if(strlen($vidDesc_bike) > 1000) $vidDesc_bike = substr($vidDesc_bike, 0, 1000);
                ?>
                <p class="desc"><? echo $vidDesc_bike ?></p>
                <a href="http://www.gumpaway.com/makeawish"  target="_blank"><? echo htmlspecialchars($seeProject) ?></a>
            </li>
		</ul>
        <ul class="right">
        	<li>
				<h2 class="artLiner"><? echo htmlspecialchars($artwork) ?></h2>
                <p class="pHolder">
                    <a class="imgLink" href="artwork.php<? echo $globalLink ?>"> 
	                	<img src="images/projects/artwork.jpg">
                    </a>
                </p>
            </li>
			<li class="video_li">
				<h2><a href="lab.php<? echo $globalLink ?>"><? echo htmlspecialchars($recentExps) ?></a></h2>
                <ul>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="lab_getExp.php?<? echo $globalLink ?>&exp_ID=machineOne&exp_Type=vid">
	                            <img src="images/lab/experiment_8.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($experiment_3_title) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=turrentblok&exp_Type=vid">
	                            <img src="images/lab/experiment_3.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($experiment_3_title) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=roboblok&exp_Type=vid">
	                            <img src="images/lab/experiment_2.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($experiment_2_title) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=roverapp&exp_Type=vid">
	                            <img src="images/lab/experiment_4.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($experiment_4_title) ?></h3>	
                    </li>
					<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=shapeShifter&exp_Type=vid">
	                            <img src="images/lab/experiment_5.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($experiment_5_title) ?></h3>
                    </li>
				</ul>
            </li>
            <li class="video_li">
				<h2><a href="videos.php<? echo $globalLink ?>"><? echo htmlspecialchars($recentVideos) ?></a></h2>
                <ul>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=evn">
	                            <img src="images/videoImgContent/vid_thumb_evn.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($vidTitle_evn) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=rigCH">
	                            <img src="images/videoImgContent/vid_thumb_rig.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($vidTitle_rig) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=destinyTVC">
	                            <img src="images/videoImgContent/vid_thumb_destinyTVC.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($vidTitle_destinyTVC) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=tnmt">
	                            <img src="images/videoImgContent/vid_thumb_tnmt.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($vidTitle_tnmt) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=minion">
	                            <img src="images/videoImgContent/vid_thumb_minion.jpg">
                            </a>
		                </p>
                        <h3><? echo htmlspecialchars($vidTitle_minion) ?></h3>
                    </li>
                	<li class="liner">
                    	<p class="pHolder">
                            <a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=earlyConcept">
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
        	<li class="list_2"><a class="linkAnim about" href="about.php<? echo $globalLink ?>"><h2><? echo htmlspecialchars($about) ?></h2></a></li>
        	<li class="list_2"><a class="linkAnim lab" href="lab.php<? echo $globalLink ?>"><h2><? echo htmlspecialchars($lab) ?></h2></a></li>
        	<li class="list_2"><a class="linkAnim contact" href="contact.php<? echo $globalLink ?>"><h2><? echo htmlspecialchars($contact) ?></h2></a></li>
        </ul>
        
    </div>
	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















