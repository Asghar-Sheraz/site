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

<?

if (($vidID == "tnmt") || ($vidID == null)){
	$vidThumb = "vid_thumb_tnmt.jpg";
	$vid = "https://player.vimeo.com/video/281866668?title=0&byline=0&portrait=0";
	$isActive_P1 = "isActive";
	$vidTitle = $vidTitle_tnmt;
	$vidDesc = $vidDesc_tnmt;
	$tnmtDisplay = "none";
	$vimeoLink = "https://vimeo.com/281866668";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}


if ($vidID == "minion"){
	$vidThumb = "vid_thumb_minion.jpg";
	$vid = "https://player.vimeo.com/video/281866484?title=0&byline=0&portrait=0";
	$isActive_P1 = "isActive";
	$vidTitle = $vidTitle_minion;
	$vidDesc = $vidDesc_minion;
	$minionDisplay = "none";
	$vimeoLink = "https://vimeo.com/281866484";
	$hideVimeoBTN = "block";
	$flashbanners ="none";

}

if ($vidID == "earlyConcept"){
	$vidThumb = "vid_thumb_earlyConcept.jpg";
	$vid = "https://player.vimeo.com/video/284018632?title=0&byline=0&portrait=0";
	$isActive_P1 = "isActive";
	$vidTitle = $vidTitle_earlyConcept;
	$vidDesc = $vidDesc_earlyConcept;
	$earlyConceptDisplay = "none";
	$vimeoLink = "https://vimeo.com/284018632";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}

if ($vidID == "mark6"){
	$vidThumb = "vid_thumb_spartanMark6.jpg";
	$vid = "spartanMark6";
	$isActive_P2 = "https://player.vimeo.com/video/285203433?title=0&byline=0&portrait=0";
	$x = "-217px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_mark6;
	$vidDesc = $vidDesc_mark6;
	$mark6Display = "none";
	$vimeoLink = "https://vimeo.com/285203433";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}


if ($vidID == "scorpion"){
	$vidThumb = "vid_thumb_scorpion.jpg";
	$vid = "https://player.vimeo.com/video/281866623?title=0&byline=0&portrait=0";
	$isActive_P2 = "isActive";
	$x = "-217px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_scorpion;
	$vidDesc = $vidDesc_scorpion;
	$scorpionDisplay = "none";
	$vimeoLink = "https://vimeo.com/281866623";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}

if ($vidID == "pegasus"){
	$vidThumb = "vid_thumb_pegasus.jpg";
	$vid = "https://player.vimeo.com/video/281866582?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_pegasus;
	$vidDesc = $vidDesc_pegasus;
	$pegasusDisplay = "none";
	$vimeoLink = "https://vimeo.com/281866582";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}

if ($vidID == "minionDemo"){
	$vidThumb = "vid_thumb_minion_demo.jpg";
	$vid = "https://player.vimeo.com/video/316227753?title=0&byline=0&portrait=0";
	$isActive_P2 = "isActive";
	$x = "-217px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_minionDemos;
	$vidDesc = $vidDesc_minionDemo;
	$minionDemoDisplay = "none";
	$vimeoLink = "";
	$hideVimeoBTN = "none";
	$flashbanners ="none";
}

if ($vidID == "billyBeats"){
	$vidThumb = "vid_thumb_billyBeats.jpg";
	$vid = "https://player.vimeo.com/video/316227725?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_billyBeats;
	$vidDesc = $vidDesc_billyBeats;
	$billyBeatsDisplay = "none";
	$vimeoLink = "";
	$hideVimeoBTN = "none";
	$flashbanners ="none";
}

if ($vidID == "neo"){
	$vidThumb = "vid_thumb_neoShifters.jpg";
	$vid = "https://player.vimeo.com/video/316227761?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_neo;
	$vidDesc = $vidDesc_neo;
	$neoDisplay = "none";
	$vimeoLink = "";
	$hideVimeoBTN = "none";
	$flashbanners ="block";
}
	
if ($vidID == "destinyTVC"){
	$vidThumb = "vid_thumb_destinyTVC.jpg";
	$vid = "https://player.vimeo.com/video/281866060?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_destinyTVC;
	$vidDesc = $vidDesc_destinyTVC;
	$destinyTVCDisplay = "none";
	$vimeoLink = "https://vimeo.com/281866060";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}
if ($vidID == "magnext"){
	$vidThumb = "vid_thumb_magnext.jpg";
	$vid = "https://player.vimeo.com/video/281866290?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_magnext;
	$vidDesc = $vidDesc_magnext;
	$magnextDisplay = "none";
	$vimeoLink = "https://vimeo.com/281866290";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}	
if ($vidID == "starbucksMinions"){
	$vidThumb = "vid_thumb_starbucksMinions.jpg";
	$vid = "https://player.vimeo.com/video/281866539?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_starbucksMinions;
	$vidDesc = $vidDesc_starbucksMinions;
	$starbucksMinionsDisplay = "none";
	$vimeoLink = "https://vimeo.com/281866539";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}	
if ($vidID == "fumeTracking"){
	$vidThumb = "vid_thumb_fumeTracking.jpg";
	$vid = "https://player.vimeo.com/video/281866265?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_fumeTracking;
	$vidDesc = $vidDesc_fumeTracking;
	$fumeTrackingDisplay = "none";
	$vimeoLink = "https://vimeo.com/281866265";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}
if ($vidID == "mattelMinions"){
	$vidThumb = "vid_thumb_mattelMinions.jpg";
	$vid = "https://player.vimeo.com/video/281866512?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_mattelMinions;
	$vidDesc = $vidDesc_mattelMinions;
	$mattelMinionsDisplay = "none";
	$vimeoLink = "https://vimeo.com/281866512";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}	
if ($vidID == "rigCH"){
	$vidThumb = "vid_thumb_rig.jpg";
	$vid = "https://player.vimeo.com/video/286692021?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_rig;
	$vidDesc = $vidDesc_rig;
	$rigDisplay = "none";
	$vimeoLink = "https://vimeo.com/286692021";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}	
if ($vidID == "evn"){
	$vidThumb = "vid_thumb_evn.jpg";
	$vid = "https://player.vimeo.com/video/286996657?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_evn;
	$vidDesc = $vidDesc_evn;
	$evnDisplay = "none";
	$vimeoLink = "https://vimeo.com/286996657";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}	
if ($vidID == "haloLapse"){
	$vidThumb = "vid_thumb_haloLapse.jpg";
	$vid = "https://player.vimeo.com/video/286463615?title=0&byline=0&portrait=0";
	$isActive_P3 = "isActive";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_haloLapse;
	$vidDesc = $vidDesc_haloLapse;
	$haloLapseDisplay = "none";
	$vimeoLink = "https://vimeo.com/286463615";
	$hideVimeoBTN = "block";
	$flashbanners ="none";
}	
?>

</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>

<div  class="mainContainer" style="display:<? echo $content ?>;">
    <div class="vidContainer">
		<h2><? echo htmlspecialchars($videos); ?></h2>
    	<div class="videoHolder">
		<div style="padding:56.25% 0 0 0;position:relative;">
			<iframe src="<? echo $vid  ?>" style="position:absolute;top:0;left:0;width:96%;height:96%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
			</iframe>
		</div>
			<script src="https://player.vimeo.com/api/player.js"></script>            
			<!--video controls  poster="images/videoImgContent/<? echo $vidThumb ?>";  preload="auto" id="cms_video" >
				<source src="videos/<? echo $vid  ?>.mp4" type="video/mp4" />
				<track default="" srclang="en" kind="subtitles" label="English subtitles" src="devstories-en.vtt"></track>
            </video-->
            <script type="text/javascript">
                var video= $('#cms_video').get(0);       
                video.addEventListener('ended',function(){
                    video.load();     
                },false);
            </script>
			<!--a class="vimeoLink" style="display:<? echo $hideVimeoBTN ?>" href="<? echo $vimeoLink ?>" target="_blank" ><? echo $vimeoWatch ?></a-->
            <h3><? echo $vidTitle ?></h3>
            <p><? echo $vidDesc ?></p>
            <h3 style="display:<? echo $flashbanners ?>;" class="headerBlue"><? echo $swf ?></h3>
			<ul class="flashDownloader" style="display:<? echo $flashbanners ?>;">
				<li><a href="videos/halo.exe" download><img src="images/videoImgContent/vid_thumb_flash_halo.jpg" alt="" title="" /></a></li>
				<li><a href="videos/pirate.exe" download><img src="images/videoImgContent/vid_thumb_flash_pirate.jpg" alt="" title="" /></a></li>
				<li><a href="videos/dragon.exe" download><img src="images/videoImgContent/vid_thumb_flash_dragons.jpg" alt="" title="" /></a></li>
				<li><a href="videos/QR.exe" download><img src="images/videoImgContent/vid_thumb_flash_QR.jpg" alt="" title="" /></a></li>
			</ul>
    	</div>
		<h2 class="vidHeader"><? echo $moreVids ?></h2>
        	<ul class="otherVideoIcons">
			<li style="display: <? echo $neoDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=neo">
						<img src="images/videoImgContent/vid_thumb_neoShifters.jpg" alt="<? echo $vidTitle_neo ?>"/>
					</a>
				<h3><? echo $vidTitle_neo ?></h3>
				</p>
			</li>
			<li style="display: <? echo $haloLapseDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=haloLapse">
						<img src="images/videoImgContent/vid_thumb_haloLapse.jpg" alt="<? echo $vidTitle_haloLapse ?>"/>
					</a>
				<h3><? echo $vidTitle_haloLapse ?></h3>
				</p>
			</li>
			<li style="display: <? echo $rigDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=rigCH">
						<img src="images/videoImgContent/vid_thumb_rig.jpg" alt="<? echo $vidTitle_rig ?>"/>
					</a>
				<h3><? echo $vidTitle_rig ?></h3>
				</p>
			</li>
			<li style="display: <? echo $evnDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=evn">
						<img src="images/videoImgContent/vid_thumb_evn.jpg" alt="<? echo $vidTitle_evn ?>"/>
					</a>
				<h3><? echo $vidTitle_evn ?></h3>
				</p>
			</li>
			<li style="display: <? echo $magnextDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=magnext">
						<img src="images/videoImgContent/vid_thumb_magnext.jpg" alt="<? echo $vidTitle_magnext ?>"/>
					</a>
				<h3><? echo $vidTitle_magnext ?></h3>
				</p>
			</li>

			<li style="display: <? echo $tnmtDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=tnmt">
						<img src="images/videoImgContent/vid_thumb_tnmt.jpg" alt="<? echo $vidTitle_tnmt ?>"/>
					</a>
				<h3><? echo $vidTitle_tnmt ?></h3>
				</p>
			</li>
			<li style="display: <? echo $fumeTrackingDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=fumeTracking">
						<img src="images/videoImgContent/vid_thumb_fumeTracking" alt="<? echo $vidTitle_fumeTracking ?>"/>
					</a>
				<h3><? echo $vidTitle_fumeTracking ?></h3>
				</p>
			</li>
			<li style="display: <? echo $minionDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=minion">
						<img src="images/videoImgContent/vid_thumb_minion" alt="<? echo $vidTitle_minion ?>"/>
					</a>
				<h3><? echo $vidTitle_minion ?></h3>
				</p>
			</li>
			<li style="display: <? echo $destinyTVCDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=destinyTVC">
						<img src="images/videoImgContent/vid_thumb_destinyTVC" alt="<? echo $vidTitle_destinyTVC ?>"/>
					</a>
				<h3><? echo $vidTitle_destinyTVC ?></h3>
				</p>
			</li>
			<li style="display: <? echo $earlyConceptDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=earlyConcept">
						<img src="images/videoImgContent/vid_thumb_earlyConcept.jpg" alt="<? echo $vidTitle_earlyConcept ?>"/>
					</a>
				<h3><? echo $vidTitle_earlyConcept ?></h3>
				</p>
			</li>
			<li style="display: <? echo $mark6Display ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=mark6">
						<img src="images/videoImgContent/vid_thumb_spartanMark6.jpg" alt="<? echo $vidTitle_mark6 ?>"/>
					</a>
				<h3><? echo $vidTitle_mark6 ?></h3>
				</p>
			</li>
			<li style="display: <? echo $scorpionDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=scorpion">
						<img src="images/videoImgContent/vid_thumb_scorpion.jpg" alt="<? echo $vidTitle_scorpion ?>"/>
					</a>
				<h3><? echo $vidTitle_scorpion ?></h3>
				</p>
			</li>
			<li style="display: <? echo $pegasusDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=pegasus">
						<img src="images/videoImgContent/vid_thumb_pegasus.jpg" alt="<? echo $vidTitle_pegasus ?>"/>
					</a>
				<h3><? echo $vidTitle_pegasus ?></h3>
				</p>
			</li>
			<li style="display: <? echo $minionDemoDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=minionDemo">
						<img src="images/videoImgContent/vid_thumb_minion_demo.jpg" alt="<? echo $vidTitle_minionDemos ?>"/>
					</a>
				<h3><? echo $vidTitle_minionDemos ?></h3>
				</p>
			</li>
			<li style="display: <? echo $starbucksMinionsDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=starbucksMinions">
						<img src="images/videoImgContent/vid_thumb_starbucksMinions.jpg" alt="<? echo $vidTitle_starbucksMinions ?>"/>
					</a>
				<h3><? echo $vidTitle_starbucksMinions ?></h3>
				</p>
			</li>
			<li style="display: <? echo $billyBeatsDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=billyBeats">
						<img src="images/videoImgContent/vid_thumb_billyBeats.jpg" alt="<? echo $vidTitle_billyBeats ?>"/>
					</a>
				<h3><? echo $vidTitle_billyBeats ?></h3>
				</p>
			</li>
			<li style="display: <? echo $mattelMinionsDisplay ?>;">
				<p>
					<a href="videoLoader.php<? echo $globalLink ?>&vid_ID=mattelMinions">
						<img src="images/videoImgContent/vid_thumb_mattelMinions.jpg" alt="<? echo $vidTitle_mattelMinions ?>"/>
					</a>
				<h3><? echo $vidTitle_mattelMinions ?></h3>
				</p>
			</li>
		</ul>
	</div>
</div>
	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















