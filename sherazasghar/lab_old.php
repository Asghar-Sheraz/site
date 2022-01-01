<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'lab';
include_once "includes/sharedPageContent.php";
include_once "includes/meta.php";
include_once "includes/mobileDetect.php";
include_once "includes/labContent.php";
?>
<title><? echo htmlentities($metaTitle) ?></title>
<meta name="description" content="<? echo htmlentities($metaContent) ?>">
<meta name="keywords" content="<? echo htmlentities($metaKeywords) ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="css/lab.css">
<? include "includes/links.php" ?>
<? include "includes/socialNetworks.php" ?>
<? include 'includes/colorstyle.php' ?>
</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<div  class="mainContainer" style="display:<? echo $content ?>;">
	<div class="default_Lab">
    	<div class="labCallHolder">
        <a style="display:<? echo $showDesktop ?>;" href="http://<? echo $linkMan ?>/lab.php/bubbyExperiment.php<? echo ($globalLink)?>" target="_blank"><? echo htmlspecialchars($play_)?></a>
        <p style="display:<? echo $showMobile ?>;"><? echo htmlspecialchars($mb_Detect_MSG)?></p>

        <img  src="images/lab/buddyexperiment.jpg" alt="The Buddy Experiment" title="The Buddy Experiment" />        </div>
      <h2><? echo htmlspecialchars($be) ?></h2>
        <p><? echo htmlspecialchars($be_desc) ?></p>
        <div class="table">
            <ul>
                <li class="text"><h2><? echo htmlspecialchars($tools)?></h2></li>
                <li class="tools"><img src="images/about/unity3D_Icon.png" alt="Unity 3D" title="Unity 3D" /></li>
                <li class="tools"><img src="images/about/AutoDesk3dsMax_Icon.png" alt="AutoDesk 3ds Max" title="AutoDesk 3ds Max" /></li>
                <li class="tools"><img src="images/about/javascript_Icon.png" alt="Javascript" title="Javascript" /></li>
                <li class="tools"><img src="images/about/adobePhotoshop_Icon.png" alt="Adobe Photoshop" title="Adobe Photoshop" /></li>
                <li class="tools"><img src="images/about/adobeIllustrator_Icon.png" alt="Adobe Illustrator" title="Adobe Illustrator" /></li>
            </ul>
        </div>
    </div>
    <div class="artWork_Lab">
    	<img  src="images/lab/artwork_lab.png" alt="painter" title="painter" />
    </div>
   	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















