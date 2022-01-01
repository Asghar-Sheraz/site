<!DOCTYPE html>
<html><head>
<?
$pageID = 'videos';
include_once "includes/sharedPageContent.php";
include_once "includes/projectContent.php";
include_once "includes/meta.php";
?>
<title><? echo htmlentities($metaTitle) ?></title>
<meta name="description" content="<? echo htmlentities($metaContent) ?>">
<meta name="keywords" content="<? echo htmlentities($metaKeywords) ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="css/videos.css">
<? include "includes/links.php" ?>
<? include "includes/socialNetworks.php" ?>
<? include 'includes/colorstyle.php' ?>

</head>
<body>
<? include 'includes/header.php'?>
<div  class="mainContainer" style="display:<? echo $content ?>;">
    <div class="vidContainer">
	    <h2><? echo htmlspecialchars($videos); ?></h2>
        <div class="videoThumb">
			<ul class="navIT">
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=haloLapse">
								<img src="images/videoImgContent/vid_thumb_haloLapse.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_haloLapse) ?></h3>
						<p><? echo $vidDesc_haloLapse ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=haloLapse"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=tnmt">
								<img src="images/videoImgContent/vid_thumb_tnmt.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_tnmt) ?></h3>
						<p><? echo $vidDesc_tnmt ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=tnmt"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=starbucksMinions">
								<img src="images/videoImgContent/vid_thumb_starbucksMinions.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_starbucksMinions) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_starbucksMinions) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=starbucksMinions"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=minion">
								<img src="images/videoImgContent/vid_thumb_minion.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_minion) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_minion) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=minion"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=mattelMinions">
								<img src="images/videoImgContent/vid_thumb_mattelMinions.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_mattelMinions) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_mattelMinions) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=mattelMinions"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=scorpion">
								<img src="images/videoImgContent/vid_thumb_scorpion.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_scorpion) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_scorpion) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=scorpion"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
			</ul>
			<ul class="navIT rightIT">
				<li>
					<p class="pHolder">
						<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=evn">
							<img src="images/videoImgContent/vid_thumb_evn.jpg">
						</a>
					</p>
					<h3><? echo htmlspecialchars($vidTitle_evn) ?></h3>
					<p><? echo $vidDesc_evn ?></p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=evn"><? echo htmlspecialchars($seeVideo) ?></a>
				</li>
				<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=earlyConcept">
								<img src="images/videoImgContent/vid_thumb_earlyConcept.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_earlyConcept) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_earlyConcept) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=earlyConcept"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=fumeTracking">
								<img src="images/videoImgContent/vid_thumb_fumeTracking.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_fumeTracking) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_fumeTracking) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=fumeTracking"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=mark6">
								<img src="images/videoImgContent/vid_thumb_spartanMark6.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_mark6) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_mark6) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=mark6"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=neo">
								<img src="images/videoImgContent/vid_thumb_neoShifters.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_neo) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_neo) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=neo"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
			</ul>
			<ul class="navIT">
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=rigCH">
								<img src="images/videoImgContent/vid_thumb_rig.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_rig) ?></h3>
						<p><? echo $vidDesc_rig ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=rig"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=magnext">
								<img src="images/videoImgContent/vid_thumb_magnext.jpg">
							</a>    
						</p>
						<h3><? echo htmlspecialchars($vidTitle_magnext) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_magnext) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=magnext"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=destinyTVC">
								<img src="images/videoImgContent/vid_thumb_destinyTVC.jpg">
							</a>    
						</p>
						<h3><? echo htmlspecialchars($vidTitle_destinyTVC) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_destinyTVC) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=destinyTVC"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=billyBeats">
								<img src="images/videoImgContent/vid_thumb_billyBeats.jpg">
							</a>    
						</p>
						<h3><? echo htmlspecialchars($vidTitle_billyBeats) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_billyBeats) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=billyBeats"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=pegasus">
								<img src="images/videoImgContent/vid_thumb_pegasus.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_pegasus) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_pegasus) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=pegasus"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
					<li>
						<p class="pHolder">
							<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=minionDemo">
								<img src="images/videoImgContent/vid_thumb_minion_demo.jpg">
							</a>
						</p>
						<h3><? echo htmlspecialchars($vidTitle_minionDemos) ?></h3>
						<p><? echo htmlspecialchars($vidDesc_minionDemo) ?></p>
						<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=minionDemo"><? echo htmlspecialchars($seeVideo) ?></a>
					</li>
			</ul>
        </div>
    </div>
	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















