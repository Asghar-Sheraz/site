<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'lab';
include_once "../includes/sharedPageContent.php";
include_once "../includes/meta.php";
include_once "../includes/labContent.php";
?>
<title><? echo htmlentities($metaTitle) ?></title>
<meta name="description" content="<? echo htmlentities($metaContent) ?>">
<meta name="keywords" content="<? echo htmlentities($metaKeywords) ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="/css/buddyExperiment.css">
<? include "../includes/links.php" ?>
<? include '../includes/colorstyle.php' ?>
</head>
<body>
<? include '../includes/header.php'?>
<div id="overview" class="mainContainer">
	<div class="default_Lab">
         <iframe width="960" height="600" scrolling="no" frameborder="0" src="http://www.sherazasghar.com/buddy.php"></iframe> 
		<ul class="icons">
        	<li><img src="../images/lab/buddyIcon_00.jpg"></li>
        	<li><img src="../images/lab/buddyIcon_01.jpg"></li>
        	<li><img src="../images/lab/buddyIcon_02.png"></li>
        </ul>
        <h2><? echo htmlspecialchars($be) ?></h2>
        <p><? echo htmlspecialchars($be_desc) ?></p>
        <div class="table">
            <ul>
                <li class="text"><h2><? echo htmlspecialchars($tools)?></h2></li>
                <li class="tools"><img src="/images/about/unity3D_Icon.png" alt="Unity 3D" title="Unity 3D" /></li>
                <li class="tools"><img src="/images/about/AutoDesk3dsMax_Icon.png" alt="AutoDesk 3ds Max" title="AutoDesk 3ds Max" /></li>
                <li class="tools"><img src="/images/about/javascript_Icon.png" alt="Javascript" title="Javascript" /></li>
                <li class="tools"><img src="/images/about/adobePhotoshop_Icon.png" alt="Adobe Photoshop" title="Adobe Photoshop" /></li>
                <li class="tools"><img src="/images/about/adobeIllustrator_Icon.png" alt="Adobe Illustrator" title="Adobe Illustrator" /></li>
            </ul>
        </div>
    </div>
	<? include '../includes/footer.php'?>
</div>
</body>
</html>
















