<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'halo';
include_once "includes/sharedPageContent.php";
include_once "includes/projectContent.php";
include_once "includes/meta.php";
?>
<title><? echo htmlentities($metaTitle) ?></title>
<meta name="description" content="<? echo htmlentities($metaContent) ?>">
<meta name="keywords" content="<? echo htmlentities($metaKeywords) ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="css/superslides.css">
<link rel="stylesheet" href="css/project.css">
<? include "includes/links.php" ?>
<? include "includes/socialNetworks.php" ?>
<? include 'includes/colorstyle.php' ?>

</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<div id="slides"  style="display:<? echo $content ?>;">
    <div class="slides-container">
        <div>
            <img src="images/<? echo $projectBanner1 ?>.jpg" alt="">
        </div>
        <div>
            <img src="images/<? echo $projectBanner3 ?>.jpg" alt="">
        </div>
        <div>
            <img src="images/<? echo $projectBanner2 ?>.jpg" alt="">
        </div>
	</div>
    <nav class="slides-navigation">
   	  <div class="bannerContent">
        <p style="text-shadow:none; "class="projectTitle"><? echo $bannerTitle ?></p>
            <h1  class="projectCallOut" style="text-shadow:none;"><? echo $bannercallOut ?></h1>
            <p style="text-shadow:none; color:#888;">
			<? echo htmlspecialchars($bannerTextContent) ?>
        <p style="text-shadow:none; color:#888;" class=\"p2\"><? echo htmlspecialchars($bannerReleaseDate) ?></p>
            <div>
                <a class="button" href="#theWork"><? echo htmlspecialchars($bannerActionType) ?></a>
                <a class="textBtn" href="#overview"><? echo htmlspecialchars($projectOverview) ?></a>          
            </div>
      </div>
        <div class="vidDiv">
            <a href="#theWork" class="vidBtn">
				<h2 class="play"><? echo $bannerMobileActionType ?></h2>
            </a>		
        </div>
        <div id="hover_area">
              <a id="next" href="" class="next"></a>
              <a id="prev" href="" class="prev"></a>
              <a id="down" href="#overview" class="down"></a>
        </div>
		<div id="hover_area_mobile">
              <a id="next" href="" class="next"></a>
              <a id="prev" href="" class="prev"></a>
              <a id="down" href="#overview" class="down"></a>
        </div>
    </nav>
</div>
<div id="overview" class="mainContainer"  style="display:<? echo $content ?>;">
    <div class="levelTwo">
        <div>
            <h2 class="line_A"><? echo htmlspecialchars($makingTitle) ?></h2>
			<h1 class="line_B"><? echo htmlspecialchars($makingTitle2) ?></h2>
            <p class="para_A"><? echo htmlspecialchars($makingContent) ?></p>
            <p class="para_A"><? echo htmlspecialchars($makingContent2) ?></p>
        </div>
    </div>
    <div class="levelOne">
            <ul class="tool_ul">
                <li class="tool_li"><img src="/images/about/AutoDesk3dsMax_Icon.png"  title="3ds MAX" /> <p><? echo htmlspecialchars($max) ?></p></li>
                <li class="tool_li"><img src="images/about/mentalRay_Icon.png"  title="Mental Ray" /> <p><? echo htmlspecialchars($mentalray) ?></p></li>
                <li class="tool_li"><img src="images/about/adobeAfterEffects_Icon.png"  title="After Effects" /> <p><? echo htmlspecialchars($afteraffects) ?></p></li>
                <li class="tool_li"><img src="images/about/adobePremiere_Icon.png"  title="Premiere" /> <p><? echo htmlspecialchars($premiere) ?></p></li>
                <li class="tool_li"><img src="images/about/adobePhotoshop_Icon.png"  title="Photoshop" /> <p><? echo htmlspecialchars($photoshop) ?></p></li>
                <li class="tool_li"><img src="images/about/adobeIllustrator_Icon.png"  title="Illustrator" /> <p><? echo htmlspecialchars($illustrator) ?></p></li>
           </ul>
    </div>
    <div id="theWork" class="levelThree">
		<div class="video">		
			<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/285203433?h=485f2258d3&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="SPARTAN MARK 6"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>   
		</div>
	</div>
    <div class="levelFour">
 		<div>
        	<h2><? echo htmlspecialchars($vidTitle_mark6) ?></h2>
            <p><? echo htmlspecialchars($vidDesc_mark6) ?></p>  
            <h2><? echo htmlspecialchars($createdBy) ?> : <? echo htmlspecialchars($sheraz) ?></h2>
            <p><? echo htmlspecialchars($sherazCredit) ?></p>
            <h2><? echo htmlspecialchars($creditee_0) ?></h2>
            <p><? echo htmlspecialchars($credit_0) ?></p>
	    </div>
    </div>
    <div class="artWorkHalo">
    </div>
    <h1 class="cntH1"><? echo htmlspecialchars($artworkTitle) ?></h1>
    <div class="default_Artwork">
		<div class="contentCenter">    
            <div class="imgHolder borderRemove1">
            	
                
                <p class="pHolder">
                	<a class="imgLink" href="artwork.php<? echo $globalLink ?>">
		                <img src="images/artwork/halo_concept.jpg" />
                    </a>
            	</p>
                <h3><? echo htmlspecialchars($MC_CON_title) ?></h3>
                <?       	
                if(strlen($MC_CON_desc) > 300) $MC_CON_desc = substr($MC_CON_desc, 0, 200);
                ?>
                <p><? echo htmlspecialchars($MC_CON_desc) ?></p>
                <a href="artwork.php<? echo $globalLink ?>"><? echo htmlspecialchars($seeAllArtwork) ?></a>
            
            
            </div>
            <div class="imgHolder borderRemove2">
            
            
            	<p class="pHolder">
                	<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=scorpion">
                        <img src="images/videoImgContent/vid_thumb_scorpion.jpg" />
                    </a>
            	</p>
                <h3><? echo htmlspecialchars($relatedVideo) ?> - <? echo htmlspecialchars($vidTitle_pegasus) ?></h3>
                <?       	
                if(strlen($vidDesc_scorpion) > 300) $vidDesc_scorpion = substr($vidDesc_scorpion, 0, 210).'...';
                ?>
                <p><? echo htmlspecialchars($vidDesc_scorpion) ?></p>
                <a href="videoLoader.php<? echo $globalLink ?>&vid_ID=scorpion"><? echo htmlspecialchars($watchVideo) ?></a>


            </div>
            <div class="imgHolder borderRemove3">


            	<p class="pHolder">
                	<a class="imgLink" href="videoLoader.php<? echo $globalLink ?>&vid_ID=pegasus">
                        <img src="images/videoImgContent/vid_thumb_pegasus.jpg" />
                    </a>
            	</p>
                <h3><? echo htmlspecialchars($relatedVideo) ?> - <? echo htmlspecialchars($vidTitle_pegasus) ?></h3>
                <?       	
                if(strlen($vidDesc_pegasus) > 300) $vidDesc_pegasus = substr($vidDesc_pegasus, 0, 210).'...';
                ?>
                <p><? echo htmlspecialchars($vidDesc_pegasus) ?></p>
                <a href="videoLoader.php<? echo $globalLink ?>&vid_ID=pegasus"><? echo htmlspecialchars($watchVideo) ?></a>
            </div>
	    </div>
    </div>
    <? include 'includes/otherProjects.php'?>
    
	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















