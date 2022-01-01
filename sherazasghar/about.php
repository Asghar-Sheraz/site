<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'about';
include_once "includes/sharedPageContent.php";
include_once "includes/meta.php";
include_once "includes/aboutContent.php";
?>
<title><? echo htmlentities($metaTitle) ?></title>
<meta name="description" content="<? echo htmlentities($metaContent) ?>">
<meta name="keywords" content="<? echo htmlentities($metaKeywords) ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="css/about.css">
<link href='http://fonts.googleapis.com/css?family=Londrina+Solid' rel='stylesheet' type='text/css'>
<? include "includes/links.php" ?>
<? include "includes/socialNetworks.php" ?>
<? include "includes/colorstyle.php" ?>
</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<div  class="mainContainer" style="display:<? echo $content ?>;">
	<div class="summary">
    	<p class="pIcon">
        	<span><img src="images/about/placeHolder.png"></span>
        </p>
        <ul class="left">
            <li>
                <h2><? echo htmlspecialchars($syTitle) ?></h2>
                <p><? echo htmlspecialchars($syDesc) ?></p>
				<p class="dateAbout"><? echo htmlspecialchars($sydate) ?></p>
            </li>
            <li>
                <h2><? echo htmlspecialchars($mySkills) ?></h2>
                <p><? echo htmlspecialchars($skills) ?></p>
				<p class="dateAbout"><? echo htmlspecialchars($sydate) ?></p>
			</li>
            <!--li>
                <h2><? echo htmlspecialchars($myTraining) ?></h2>
                <p><? echo htmlspecialchars($training) ?></p>
				<p class="dateAbout"><? echo htmlspecialchars($sydateTraining) ?></p>
            </li-->
        </ul>
        <ul class="right">
            <li>
                <h2><? echo htmlspecialchars($Tools) ?></h2>
                <ul>
                	<li>
                    	<img src="images/about/AutoDeskMaya_inv.png" title="AutoDesk Maya">
                        <p><? echo htmlspecialchars($maya) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/fusion_inv.png" title="AutoDesk Fusion">
                        <p><? echo htmlspecialchars($fusion) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/AutoDesk3dsMax_inv.png" title="AutoDesk 3ds Max">
                        <p><? echo htmlspecialchars($max) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/mudBox_inv.png"  title="AutoDesk MudBox">
                        <p><? echo htmlspecialchars($mudbox) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/cinema4D_inv.png" title="Maxon Cinema 4D">
                    	<p><? echo htmlspecialchars($c4d) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/unity3D_inv.png"  title="Unity 3D">
                    	<p><? echo htmlspecialchars($unity) ?></p>
                    </li>
					<li>
                    	<img src="images/about/substance_inv.png"  title="Adobe Subastance">
                    	<p><? echo htmlspecialchars($substance) ?></p>
                    </li>
					<li>
                    	<img src="images/about/vray_inv.png"  title="V Ray">
                    	<p><? echo htmlspecialchars($vray) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/AutoDeskArnold_inv.png"  title="AutoDesk Arnold">
                    	<p><? echo htmlspecialchars($arnold) ?></p>
                    </li>
                	<!--li>
                    	<img src="images/about/AutoDeskMaya_inv.png" title="Autodesk Motion Builder">
                    	<p><? echo htmlspecialchars($mobu) ?></p>
                    </li-->
					<li>
                    	<img src="images/about/mentalRay_inv.png"  title="AutoDesk Mental Ray">
                    	<p><? echo htmlspecialchars($mentalray) ?></p>
                    </li>

                	<li>
                    	<img src="images/about/fumeFX_inv.png" title="fumeFX">
                    	<p><? echo htmlspecialchars($fumefx) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/html5_inv.png" title="HTML5">
                        <p><? echo htmlspecialchars($html) ?></p>
                    </li>
                	<li>
                    	<img  src="images/about/css3_inv.png"  title="CSS 3">
                        <p><? echo htmlspecialchars($css) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/javascript_inv.png" title="Javascript">
                    	<p><? echo htmlspecialchars($javascript) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/php_inv.png" title="PHP">
                    	<p><? echo htmlspecialchars($phpx) ?></p>
                    </li>
                	<li>
                    	<img src="images/about/adobeAfterEffects_inv.png"  title="Adobe After Effects">
                    	<p><? echo htmlspecialchars($afteraffects) ?></p>
                    </li>
                	<li>
                    	<img  src="images/about/adobePremiere_inv.png"  title="Adobe Premiere">
                    	<p><? echo htmlspecialchars($premiere) ?></p>
                    </li>
					<li>
                    	<img  src="images/about/adobePhotoshop_inv.png" title="Adobe Photoshop">
                        <p><? echo htmlspecialchars($photoshop) ?></p>
                    </li>
                	<li>
                    	<img  src="images/about/adobeIllustrator_inv.png"  title="Adobe Illustrator">
                        <p><? echo htmlspecialchars($illustrator) ?></p>
                    </li>
                	<li>
                    	<img  src="images/about/adobeAudition_inv.png"  title="Adobe Audition">
                        <p><? echo htmlspecialchars($audition) ?></p>
                    </li>
                	<li>
                    	<img  src="images/about/arduino_inv.png" title="arduino">
                    	<p><? echo htmlspecialchars($arduino) ?></p>
                    </li>					<!--li>
                    	<img  src="images/about/adobeAnimate_inv.png" title="Adobe Animate">
                    	<p><? echo htmlspecialchars($animate) ?></p>
                    </li-->
                	<!--li>
                    	<img  src="images/about/adobeFlash_inv.png" title="Adobe Flash">
                    	<p><? echo htmlspecialchars($flash) ?></p>
                    </li-->
				</ul>
            </li>
        </ul>
	</div>
    
    
	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















