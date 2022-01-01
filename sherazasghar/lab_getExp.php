<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'lab';
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
<link rel="stylesheet" href="css/lab.css">
<? include "includes/links.php" ?>
<? include 'includes/colorstyle.php' ?>
<? include "includes/socialNetworks.php" ?>
<script  src="javascripts/spriteclip.js"></script> 
<? 

if($expID=="pokeblok"){
	$title_exp = $experiment_1_title;
	$desc_exp = $experiment_1_desc;
	$altData = $experiment_1_title;
	$poster = $exp01_poster;
	$videoSrc = "https://player.vimeo.com/video/285204102?title=0&byline=0&portrait=0";
	$imgLoad01 = $load_Exp01_link_01;
	$imgLoad02 = $load_Exp01_link_02;
	$imgLoad03 = $load_Exp01_link_03;
	$imgLoad04 = $load_Exp01_link_04;
	$imgLoad05 = $load_Exp01_link_05;
	$imgLoad06 = $load_Exp01_link_06;
	$imgLoad07 = $load_Exp01_link_07;
	$imgLoad08 = $load_Exp01_link_08;
	$imgLoad09 = $load_Exp01_link_09;
	$imgLoad10 = $load_Exp01_link_10;
	$imgLoad11 = $load_Exp01_link_11;
	$imgLoad12 = $load_Exp01_link_12;
	$displayMinion = "none";
}

if($expID=="roboblok"){
	$title_exp = $experiment_2_title;
	$desc_exp = $experiment_2_desc;
	$altData = $experiment_2_title;
	$poster = $exp02_poster;
	$videoSrc = "https://player.vimeo.com/video/283996319?title=0&byline=0&portrait=0";
	$imgLoad01 = $load_Exp02_link_01;
	$imgLoad02 = $load_Exp02_link_02;
	$imgLoad03 = $load_Exp02_link_03;
	$imgLoad04 = $load_Exp02_link_04;
	$imgLoad05 = $load_Exp02_link_05;
	$imgLoad06 = $load_Exp02_link_06;
	$imgLoad07 = $load_Exp02_link_07;
	$imgLoad08 = $load_Exp02_link_08;
	$imgLoad09 = $load_Exp02_link_09;
	$imgLoad10 = $load_Exp02_link_10;
	$imgLoad11 = $load_Exp02_link_11;
	$imgLoad12 = $load_Exp02_link_12;
	$imgLoad13 = $load_Exp02_link_13;
	$imgLoad14 = $load_Exp02_link_14;
	$imgLoad15 = $load_Exp02_link_15;
	$imgLoad16 = $load_Exp02_link_16;
	$imgLoad17 = $load_Exp02_link_17;
	$imgLoad18 = $load_Exp02_link_18;
	$displayRoboblok = "none";
}
	
if($expID=="turrentblok"){
	$title_exp = $experiment_3_title;
	$desc_exp = $experiment_3_desc;
	$altData = $experiment_3_title;
	$poster = $exp03_poster;
	$videoSrc = "https://player.vimeo.com/video/316231655?title=0&byline=0&portrait=0";
	$imgLoad01 = $load_Exp03_link_01;
	$imgLoad02 = $load_Exp03_link_02;
	$imgLoad03 = $load_Exp03_link_03;
	$imgLoad04 = $load_Exp03_link_04;
	$imgLoad05 = $load_Exp03_link_05;
	$imgLoad06 = $load_Exp03_link_06;
	$imgLoad07 = $load_Exp03_link_07;
	$imgLoad08 = $load_Exp03_link_08;
	$displayTurrentblok = "none";
	
}

if($expID=="roverapp"){
	$title_exp = $experiment_4_title;
	$desc_exp = $experiment_4_desc;
	$altData = $experiment_4_title;
	$poster = $exp04_poster;
	$videoSrc = "https://player.vimeo.com/video/286996695?title=0&byline=0&portrait=0";
	$imgLoad01 = $load_Exp04_link_01;
	$imgLoad02 = $load_Exp04_link_02;
	$imgLoad03 = $load_Exp04_link_03;
	$imgLoad04 = $load_Exp04_link_04;
	$imgLoad05 = $load_Exp04_link_05;
	$imgLoad06 = $load_Exp04_link_06;
	$imgLoad07 = $load_Exp04_link_07;
	$imgLoad08 = $load_Exp04_link_08;
	$imgLoad09 = $load_Exp04_link_09;
	$imgLoad10 = $load_Exp04_link_10;
	$imgLoad11 = $load_Exp04_link_11;
	$imgLoad12 = $load_Exp04_link_12;
	$imgLoad13 = $load_Exp04_link_13;
	$imgLoad14 = $load_Exp04_link_14;
	$imgLoad15 = $load_Exp04_link_15;
	$imgLoad16 = $load_Exp04_link_16;
	$imgLoad17 = $load_Exp04_link_17;
	$imgLoad18 = $load_Exp04_link_18;
	$displayRoverapp = "none";
}

if($expID=="shapeShifter"){
	$title_exp = $experiment_5_title;
	$desc_exp = $experiment_5_desc;
	$altData = $experiment_5_title;
	$poster = $exp05_poster;
	$videoSrc = "https://player.vimeo.com/video/286996717?title=0&byline=0&portrait=0";
	$imgLoad01 = $load_Exp05_link_01;
	$imgLoad02 = $load_Exp05_link_02;
	$imgLoad03 = $load_Exp05_link_03;
	$imgLoad04 = $load_Exp05_link_04;
	$imgLoad05 = $load_Exp05_link_05;
	$imgLoad06 = $load_Exp05_link_06;
	$imgLoad07 = $load_Exp05_link_07;
	$imgLoad08 = $load_Exp05_link_08;
	$imgLoad09 = $load_Exp05_link_09;
	$imgLoad10 = $load_Exp05_link_10;
	$imgLoad11 = $load_Exp05_link_11;
	$displayshapeShifter = "none";
}
if($expID=="rig"){
	$title_exp = $experiment_6_title;
	$desc_exp = $experiment_6_desc;
	$altData = $experiment_6_title;
	$poster = $exp06_poster;
	$videoSrc = "https://player.vimeo.com/video/286692890?title=0&byline=0&portrait=0";
	$imgLoad01 = $load_Exp06_link_01;
	$imgLoad02 = $load_Exp06_link_02;
	$imgLoad03 = $load_Exp06_link_03;
	$imgLoad04 = $load_Exp06_link_04;
	$imgLoad05 = $load_Exp06_link_05;
	$imgLoad06 = $load_Exp06_link_06;
	$imgLoad07 = $load_Exp06_link_07;
	$imgLoad08 = $load_Exp06_link_08;
	$imgLoad09 = $load_Exp06_link_09;
	$displayRig = "none";
}

if($expID=="minBuild"){
	$title_exp = $experiment_7_title;
	$desc_exp = $experiment_7_desc;
	$altData = $experiment_7_title;
	$poster = $exp07_poster;
	$videoSrc = "https://player.vimeo.com/video/441580298?title=0&byline=0&portrait=0";
	$imgLoad01 = $load_Exp07_link_01;
	$imgLoad02 = $load_Exp07_link_02;
	$imgLoad03 = $load_Exp07_link_03;
	$imgLoad04 = $load_Exp07_link_04;
	$imgLoad05 = $load_Exp07_link_05;
	$imgLoad06 = $load_Exp07_link_06;
	$imgLoad07 = $load_Exp07_link_07;
	$imgLoad08 = $load_Exp07_link_08;
	$imgLoad09 = $load_Exp07_link_09;
	$displayMinBuild = "none";
}
if($expID=="machineOne"){
	$title_exp = $experiment_8_title;
	$desc_exp = $experiment_8_desc;
	$altData = $experiment_8_title;
	$poster = $exp08_poster;
	$videoSrc = "https://player.vimeo.com/video/653962399?title=0&byline=0&portrait=0";
	$imgLoad01 = $load_Exp08_link_01;
	$imgLoad02 = $load_Exp08_link_02;
	$imgLoad03 = $load_Exp08_link_03;
	$imgLoad04 = $load_Exp08_link_04;
	$imgLoad05 = $load_Exp08_link_05;
	$imgLoad06 = $load_Exp08_link_06;
	$imgLoad07 = $load_Exp08_link_07;
	$imgLoad08 = $load_Exp08_link_08;
	$imgLoad09 = $load_Exp08_link_09;
	$imgLoad10 = $load_Exp08_link_10;
	$imgLoad11 = $load_Exp08_link_11;
	$imgLoad12 = $load_Exp08_link_12;
	$displayMachineOne = "none";
}
	


?>
</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<div  class="mainContainer" style="display:<? echo $content ?>;">
    <ul class="lab_enlarge">
        <li>
			<h2><? echo htmlspecialchars($lab); ?> - <? echo htmlspecialchars($title_exp) ?></h2>
			<ul>
				<li>
					<?
						if($expType=="vid"){
							include 'includes/videoContent.php';
						} elseif($expType=="unity"){
							include 'includes/unityContent.php';
						} elseif($expType=="img"){
							include 'include/imgContent.php';
						}
					?>
					<img src="<? echo $imgSrc ?>" />
					<p><? echo htmlspecialchars($desc_exp) ?></p>
					<ul class="imgContent">
						<li><img src="<? echo $imgLoad01 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad02 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad03 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad04 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad05 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad06 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad07 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad08 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad09 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad10 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad11 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad12 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad13 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad14 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad15 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad16 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad17 ?>"><p></p></li>
						<li><img src="<? echo $imgLoad18 ?>"><p></p></li>
					</ul>
					<ul class="labIcons">
						
						<li style="display: <? echo $displayMachineOne ?>"><p><a href="lab_getExp.php<? echo $globalLink ?>&exp_ID=machineOne&exp_Type=vid"><img src="images/lab/experiment_8.jpg" title="<? echo htmlspecialchars($experiment_8_title) ?>"></a></p><h3><? echo htmlspecialchars($experiment_6_title) ?></h3></li>
						<li style="display: <? echo $displayRig ?>"><p><a href="lab_getExp.php<? echo $globalLink ?>&exp_ID=rig&exp_Type=vid"><img src="images/lab/experiment_6.jpg" title="<? echo htmlspecialchars($experiment_6_title) ?>"></a></p><h3><? echo htmlspecialchars($experiment_6_title) ?></h3></li>
						<li style="display: <? echo $displayMinion ?>"><p><a href="lab_getExp.php<? echo $globalLink ?>&exp_ID=pokeblok&exp_Type=vid"><img src="images/lab/experiment_1.jpg" title="<? echo htmlspecialchars($experiment_1_title) ?>"></a></p><h3><? echo htmlspecialchars($experiment_1_title) ?></h3></li>
						<li style="display: <? echo $displayRoboblok ?>"><p><a href="lab_getExp.php<? echo $globalLink ?>&exp_ID=roboblok&exp_Type=vid"><img src="images/lab/experiment_2.jpg" title="<? echo htmlspecialchars($experiment_2_title) ?>"></a></p><h3><? echo htmlspecialchars($experiment_2_title) ?></h3></li>
						<li style="display: <? echo $displayTurrentblok ?>"><p><a href="lab_getExp.php<? echo $globalLink ?>&exp_ID=turrentblok&exp_Type=vid"><img src="images/lab/experiment_3.jpg" title="<? echo htmlspecialchars($experiment_3_title) ?>"></a></p><h3><? echo htmlspecialchars($experiment_3_title) ?></h3></li>
						<li style="display: <? echo $displayRoverapp ?>"><p><a href="lab_getExp.php<? echo $globalLink ?>&exp_ID=roverapp&exp_Type=vid"><img src="images/lab/experiment_4.jpg" title="<? echo htmlspecialchars($experiment_4_title) ?>"></a></p><h3><? echo htmlspecialchars($experiment_4_title) ?></h3></li>
						<li style="display: <? echo $displayshapeShifter ?>"><p><a href="lab_getExp.php<? echo $globalLink ?>&exp_ID=shapeShifter&exp_Type=vid"><img src="images/lab/experiment_5.jpg" title="<? echo htmlspecialchars($experiment_5_title) ?>"></a></p><h3><? echo htmlspecialchars($experiment_5_title) ?></h3></li>
						<li style="display: <? echo $displayMinBuild ?>"><p><a href="lab_getExp.php<? echo $globalLink ?>&exp_ID=shapeShifter&exp_Type=vid"><img src="images/lab/experiment_7.jpg" title="<? echo htmlspecialchars($experiment_7_title) ?>"></a></p><h3><? echo htmlspecialchars($experiment_7_title) ?></h3></li>
					</ul>
				</li>
			</ul>        
        </li>
    </ul>
   	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















