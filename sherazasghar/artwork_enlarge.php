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
<? include 'includes/colorstyle.php' ?>
<script  src="javascripts/spriteclip.js"></script> 
<? 
if($imgID=="ac"){
	$title_enlarge = $ac_title;
	$desc_enlarge = $ac_desc;
	$altData = $ac_title;
	$imgSrc = $ac_link;
	$contentShow = "none";
} 
if($imgID=="ht"){
	$title_enlarge = $ht_title;
	$desc_enlarge = $ht_desc;
	$altData = $ht_title;
	$imgSrc = $ht_link;
	$contentShow = "none";
} 
if($imgID=="WOW"){
	$title_enlarge = $WOW_title;
	$desc_enlarge = $WOW_desc;
	$altData = $WOW_title;
	$imgSrc = $WOW_link;
	$contentShow = "none";
} 
if($imgID=="ST"){
	$title_enlarge = $ST_title;
	$desc_enlarge = $ST_desc;
	$altData = $ST_title;
	$imgSrc = $ST_link;
	$contentShow = "none";
}
if($imgID=="HALO"){
	$title_enlarge = $HALO_title;
	$desc_enlarge = $HALO_desc;
	$altData = $HALO_title;
	$imgSrc = $HALO_link;
	$contentShow = "none";
} 
if($imgID=="WOW2"){
	$title_enlarge = $WOW2_title;
	$desc_enlarge = $WOW2_desc;
	$altData = $WOW2_title;
	$imgSrc = $WOW2_link;
	$contentShow = "none";
	
} 
if($imgID=="MC_CON"){
	$title_enlarge = $MC_CON_title;
	$desc_enlarge = $MC_CON_desc;
	$altData = $MC_CON_title;
	$imgSrc = $MC_CON_link;
} 
if($imgID=="HT2"){
	$title_enlarge = $HT2_title;
	$desc_enlarge = $HT2_desc;
	$altData = $HT2_title;
	$imgSrc = $HT2_link;
} 
if($imgID=="minion_1"){
	$title_enlarge = $MINION_1_title;
	$desc_enlarge = $MINION_1_desc;
	$altData = $MINION_1_title;
	$imgSrc = $MINION_1_link;
	$contentShow = "none";

} 
if($imgID=="minion_2"){
	$title_enlarge = $MINION_2_title;
	$desc_enlarge = $MINION_2_desc;
	$altData = $MINION_2_title;
	$imgSrc = $MINION_2_link;
	$contentShow = "none";
} 
if($imgID=="wowWeb"){
	$title_enlarge = $wowWeb_title;
	$desc_enlarge = $wowWeb_desc;
	$altData = $wowWeb_title;
	$imgSrc = $wowWeb_link;
	$imgSrc02 = $wowWeb_link02;
	$imgSrc03 = $wowWeb_link03;
	$imgSrc04 = $wowWeb_link04;
	$imgSrc05 = $wowWeb_link05;
	$contentShow = "block";
	
} 

?>
</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<div  class="mainContainer" style="display:<? echo $content ?>;">
    <ul class="artWork_enlarge">
        <li>
        <h2><? echo htmlspecialchars($artwork); ?> - <? echo htmlspecialchars($title_enlarge) ?></h2>
            <ul>
                <li>
                    <img src="<? echo $imgSrc ?>" alt="<? echo $altData ?>" title="<? echo $altData ?>" />
                    <p><? echo htmlspecialchars($desc_enlarge) ?></p>
                    <a  href="<? echo $imgSrc ?>" download><? echo htmlspecialchars($download) ?></a>
                </li>
				<li style="display:<? echo $contentShow ?>">
                    <img src="<? echo $imgSrc02 ?>" alt="<? echo $altData ?>" title="<? echo $altData ?>" />
                    <img src="<? echo $imgSrc03 ?>" alt="<? echo $altData ?>" title="<? echo $altData ?>" />
                    <img src="<? echo $imgSrc04 ?>" alt="<? echo $altData ?>" title="<? echo $altData ?>" />
                    <img src="<? echo $imgSrc05 ?>" alt="<? echo $altData ?>" title="<? echo $altData ?>" />
				</li>
            </ul>
        </li>
    </ul>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















