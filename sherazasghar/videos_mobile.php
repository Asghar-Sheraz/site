<!DOCTYPE html>
<html>
<head>
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
	$vid = "tnmt_demo";
	$minion = "none";
	$vidTitle = $vidTitle_tnmt;
	$vidDesc = $vidDesc_tnmt;
}
if ($vidID == "minion"){
	$vidThumb = "vid_thumb_minion.jpg";
	$vid = "minion";
	$minion = "none";
	$vidTitle = $vidTitle_minion;
	$vidDesc = $vidDesc_minion;
}

if ($vidID == "earlyConcept"){
	$vidThumb = "vid_thumb_earlyConcept.jpg";
	$vid = "earlyConcept";
	$earlyConcept = "none";
	$vidTitle = $vidTitle_earlyConcept;
	$vidDesc = $vidDesc_earlyConcept;
}

if ($vidID == "mark6"){
	$vidThumb = "vid_thumb_spartanMark6.jpg";
	$vid = "spartanMark6";
	$mark6 = "none";
	$vidTitle = $vidTitle_mark6;
	$vidDesc = $vidDesc_mark6;
}


if ($vidID == "scorpion"){
	$vidThumb = "vid_thumb_scorpion.jpg";
	$vid = "scorpion_animation";
	$scorpion = "none";
	$x = "-217px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_scorpion;
	$vidDesc = $vidDesc_scorpion;
}

if ($vidID == "pegasus"){
	$vidThumb = "vid_thumb_pegasus.jpg";
	$vid = "pegasus_animation";
	$pegasus = "none";
	$x = "-217px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_pegasus;
	$vidDesc = $vidDesc_pegasus;
}

if ($vidID == "minionDemo"){
	$vidThumb = "vid_thumb_minion_demo.jpg";
	$vid = "minion_demo";
	$minion_demo = "none";
	$x = "-217px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_minionDemos;
	$vidDesc = $vidDesc_minionDemo;
}
if ($vidID == "billyBeats"){
	$vidThumb = "vid_thumb_billyBeats.jpg";
	$vid = "billyBeats";
	$billyBeats = "none";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_billyBeats;
	$vidDesc = $vidDesc_billyBeats;
}
if ($vidID == "neo"){
	$vidThumb = "vid_thumb_neoShifters.jpg";
	$vid = "neoShifters";
	$neo = "none";
	$x = "-434px"; // this var moves the pager to the location of the js position selector
	$vidTitle = $vidTitle_neo;
	$vidDesc = $vidDesc_neo;
}
?>

</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<ul class="mobile_videos"  style="display:<? echo $content ?>;">
    <li class="videoHolder">
	    <h2><? echo htmlspecialchars($videos); ?></h2>
        <video controls  poster="images/videoImgContent/<? echo $vidThumb ?>"; preload="auto" id="cms_video" autoplay >
        <source src="videos/<? echo $vid  ?>.m4v" type="video/mp4" />
        <track default="" srclang="en" kind="subtitles" label="English subtitles" src="devstories-en.vtt"></track>
        </video>
        <script type="text/javascript">
            var video= $('#cms_video').get(0);       
            video.addEventListener('ended',function(){
                video.load();     
            },false);
        </script>
        <h3><? echo $vidTitle ?></h3>
        <p><? echo $vidDesc ?></p>
    </li>
    <li  style="display:<? echo $tnmt ?>;">
        <p class="pHolder <? echo $isActive ?>">
            <a class="imgLink" href="videos_mobile.php<? echo $globalLink ?>&vid_ID=tnmt">
                <img src="images/videoImgContent/vid_thumb_tnmt.jpg">
            </a>
        </p>
        <h3><? echo $vidTitle_tnmt ?></h3>
		<?       	
        if(strlen($vidDesc_tnmt) > 300) $vidDesc_tnmt = substr($vidDesc_tnmt, 0, 300).'...';
        ?>
        <p><? echo $vidDesc_tnmt ?></p>
    </li>
    <li  style="display:<? echo $minion ?>;">
        <p class="pHolder <? echo $isActive ?>">
            <a class="imgLink" href="videos_mobile.php<? echo $globalLink ?>&vid_ID=minion">
                <img src="images/videoImgContent/vid_thumb_minion.jpg">
            </a>
        </p>
        <h3><? echo $vidTitle_minion ?></h3>
		<?       	
        if(strlen($vidDesc_minion) > 300) $vidDesc_minion = substr($vidDesc_minion, 0, 300).'...';
        ?>
        <p><? echo $vidDesc_minion ?></p>
    </li>
    <li  style="display:<? echo $earlyConcept ?>;">
        <p class="pHolder">
            <a class="imgLink" href="videos_mobile.php<? echo $globalLink ?>&vid_ID=earlyConcept">
                <img src="images/videoImgContent/vid_thumb_earlyConcept.jpg">
            </a>
        </p>	                                    
        <h3><? echo $vidTitle_earlyConcept ?></h3>
		<?       	
        if(strlen($vidDesc_earlyConcept) > 300) $vidDesc_earlyConcept = substr($vidDesc_earlyConcept, 0, 300).'...';
        ?>
        <p><? echo $vidDesc_earlyConcept ?></p>
    </li>
    <li  style="display:<? echo $mark6 ?>;">
        <p class="pHolder">
            <a class="imgLink" href="videos_mobile.php<? echo $globalLink ?>&vid_ID=mark6">
                <img src="images/videoImgContent/vid_thumb_spartanMark6.jpg">
            </a>
        </p>
        <h3><? echo $vidTitle_mark6 ?></h3>
        <p><? echo $vidDesc_mark6 ?></p>
    </li>
    <li  style="display:<? echo $scorpion ?>;">
        <p class="pHolder">
            <a class="imgLink" href="videos_mobile.php<? echo $globalLink ?>&vid_ID=scorpion">
                <img src="images/videoImgContent/vid_thumb_scorpion.jpg">
            </a>
        </p>
        <h3><? echo $vidTitle_scorpion ?></h3>
        <p><? echo $vidDesc_scorpion ?></p>
    </li>
    <li  style="display:<? echo $pegasus ?>;">
        <p class="pHolder">
            <a class="imgLink" href="videos_mobile.php<? echo $globalLink ?>&vid_ID=pegasus">
                <img src="images/videoImgContent/vid_thumb_pegasus.jpg">
            </a>
        </p>
        <h3><? echo $vidTitle_pegasus ?></h3>
        <p><? echo $vidDesc_pegasus ?></p>
    </li>
    <li  style="display:<? echo $minionDemo ?>;">
        <p class="pHolder">
            <a class="imgLink" href="videos_mobile.php<? echo $globalLink ?>&vid_ID=minionDemo">
                <img src="images/videoImgContent/vid_thumb_minion_demo.jpg">
            </a>
        </p>
        <h3><? echo $vidTitle_minionDemos ?></h3>
        <p><? echo $vidDesc_minionDemo ?></p>
    </li>
    <li  style="display:<? echo $billyBeats ?>;">
        <p class="pHolder">
            <a class="imgLink" href="videos_mobile.php<? echo $globalLink ?>&vid_ID=billyBeats">
                <img src="images/videoImgContent/vid_thumb_billyBeats.jpg">
            </a>    
        </p>
        <h3><? echo $vidTitle_billyBeats ?></h3>
        <p><? echo $vidDesc_billyBeats ?></p>
    <li  style="display:<? echo $neo ?>;">
        <p class="pHolder">
            <a class="imgLink" href="videos_mobile.php<? echo $globalLink ?>&vid_ID=neo">
                <img src="images/videoImgContent/vid_thumb_neoShifters.jpg">
            </a>
        </p>    
        <h3><? echo $vidTitle_neo ?></h3>
        <p><? echo $vidDesc_neo ?></p>
    </li>
</ul>

	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>

</body>
</html>
















