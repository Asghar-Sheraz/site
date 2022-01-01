<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'artwork';
include_once "includes/sharedPageContent.php";
include_once "includes/projectContent.php";
include_once "includes/meta.php";
?>
<title><? echo htmlentities($metaTitle) ?></title>
<meta name="description" content="<? echo htmlentities($metaContent) ?>">
<meta name="keywords" content="<? echo htmlentities($metaKeywords) ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="css/artwork.css">
<? include "includes/links.php" ?>
<? include "includes/socialNetworks.php" ?>
<? include 'includes/colorstyle.php' ?>
</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<div  class="mainContainer" style="display:<? echo $content ?>;">
    <ul class="default_Artwork">
        <li>
        <h2><? echo htmlspecialchars($artwork); ?></h2>
            <ul class="left">
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="http://gumpaway.com/" target="_blank">
                            <img src="<? echo $gumpaway_link ?>" alt="gumpaway" title="gumpaway" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($gumpaway_title) ?></h3>
                    <p><? echo htmlspecialchars($gumpaway_desc) ?></p>
                    <a  href="http://gumpaway.com/" target="_blank"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=minion_1">
                            <img src="<? echo $MINION_1_link ?>" alt="bob's blok" title="bob's blok" />
                         </a>
                    </p>
                    <h3><? echo htmlspecialchars($MINION_1_title) ?></h3>
                    <p><? echo htmlspecialchars($MINION_1_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=minion_1"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=MC_CON">
                            <img src="<? echo $MC_CON_link ?>" alt="Spartan Mark VI Concept With Master Chief" title="Spartan Mark VI Concept With Master Chief" />
                         </a>
                    </p>
                    <h3><? echo htmlspecialchars($MC_CON_title) ?></h3>
                    <p><? echo htmlspecialchars($MC_CON_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=MC_CON"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=ST">
                            <img src="<? echo $ST_link ?>" alt="Startrek" title="Startrek" />
                         </a>
                    </p>
                    <h3><? echo htmlspecialchars($ST_title) ?></h3>
                    <p><? echo htmlspecialchars($ST_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=ST"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=ht">
                            <img  src="<? echo $ht_link ?>" alt="Hotwheels" title="Hotwheels" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($ht_title) ?></h3>
                    <p><? echo htmlspecialchars($ht_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=ht"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=HALO">
                            <img src="<? echo $HALO_link ?>" alt="Halo" title="Halo" />
                         </a>
                    </p>
                    <h3><? echo htmlspecialchars($HALO_title) ?></h3>
                    <p><? echo htmlspecialchars($HALO_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=HALO"><? echo htmlspecialchars($largeView) ?></a>
                </li>
            </ul>
        </li>
        <li>
            <ul class="right">
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=wowWeb">
                            <img src="<? echo $wowWeb_link ?>" alt="World of Warcraft Website" title="World of Warcraft Website" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($wowWeb_title) ?></h3>
                    <p><? echo htmlspecialchars($wowWeb_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=wowWeb"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" style="max-height:220px;" href="http://www.alreno.com/" target="_blank">
                            <img src="<? echo $alreno_link ?>" alt="www.alreno.com" title="www.alreno.com" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($alreno_title) ?></h3>
                    <p><? echo htmlspecialchars($alreno_desc) ?></p>
                    <a  href="http://www.alreno.com/" target="_blank"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=minion_2">
                            <img src="<? echo $MINION_2_link ?>" alt="MINION WAGON RIG" title="MINION WAGON RIG" />
                         </a>
                    </p>
                    <h3><? echo htmlspecialchars($MINION_2_title) ?></h3>
                    <p><? echo htmlspecialchars($MINION_2_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=minion_1"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=ac">
                            <img src="<? echo $ac_link ?>" alt="Assasins Creed" title="Assasins Creed" />
                         </a>
                     </p>
                   <h3><? echo htmlspecialchars($ac_title) ?></h3>
                    <p><? echo htmlspecialchars($ac_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=ac"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=WOW">
                            <img src="<? echo $WOW_link ?>" alt="World Of Warcraft" title="World Of Warcraft" />
                         </a>
                    </p>
                    <h3><? echo htmlspecialchars($WOW_title) ?></h3>
                    <p><? echo htmlspecialchars($WOW_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=WOW"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=WOW2">
                            <img src="<? echo $WOW2_link ?>" alt="World Of Warcraft" title="World Of Warcraft" />
                         </a>
                    </p>
                    <h3><? echo htmlspecialchars($WOW2_title) ?></h3>
                    <p><? echo htmlspecialchars($WOW2_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=WOW2"><? echo htmlspecialchars($largeView) ?></a>
                </li>
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=Hotwheels">
                            <img src="<? echo $HT2_link ?>" alt="Hotwheels" title="Hotwheels" />
                         </a>
                    </p>
                    <h3><? echo htmlspecialchars($HT2_title) ?></h3>
                    <p><? echo htmlspecialchars($HT2_desc) ?></p>
                    <a  href="artwork_enlarge.php<? echo $globalLink ?>&img_ID=Hotwheels"><? echo htmlspecialchars($largeView) ?></a>
                </li>
            </ul>
        </li>
    </ul>
	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















