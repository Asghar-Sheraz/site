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
<? include "includes/socialNetworks.php" ?>
<? include 'includes/colorstyle.php' ?>
</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<div  class="mainContainer" style="display:<? echo $content ?>;">
    <ul class="default_lab">
        <li>
        <h2><? echo htmlspecialchars($lab); ?></h2>
         <ul class="left">
				<li>
                	<p class="pHolder">
                        <a class="linkImg" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=machineOne&exp_Type=vid">
                            <img src="<? echo $experiment_8 ?>" alt="<? echo htmlspecialchars($experiment_8_title) ?>" title="<? echo htmlspecialchars($experiment_8_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_8_title) ?></h3>
                    <?
	                if(strlen($experiment_8_desc) > 500) $experiment_8_desc = substr($experiment_8_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_8_desc) ?></p>
                    <a  href="lab_getExp.php<? echo $globalLink ?>&exp_ID=machineOne&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
				<li>
                	<p class="pHolder">
                        <a class="linkImg" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=minBuild&exp_Type=vid">
                            <img src="<? echo $experiment_7 ?>" alt="<? echo htmlspecialchars($experiment_7_title) ?>" title="<? echo htmlspecialchars($experiment_7_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_7_title) ?></h3>
                    <?
	                if(strlen($experiment_7_desc) > 500) $experiment_7_desc = substr($experiment_7_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_7_desc) ?></p>
                    <a  href="lab_getExp.php<? echo $globalLink ?>&exp_ID=shapeShifter&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
				<li>
                	<p class="pHolder">
                        <a class="linkImg" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=shapeShifter&exp_Type=vid">
                            <img src="<? echo $experiment_5 ?>" alt="<? echo htmlspecialchars($experiment_5_title) ?>" title="<? echo htmlspecialchars($experiment_5_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_5_title) ?></h3>
                    <?
	                if(strlen($experiment_5_desc) > 500) $experiment_5_desc = substr($experiment_5_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_5_desc) ?></p>
                    <a  href="lab_getExp.php<? echo $globalLink ?>&exp_ID=shapeShifter&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
			 <li>
			 <li>
                	<p class="pHolder">
                        <a class="linkImg" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=turrentblok&exp_Type=vid">
                            <img src="<? echo $experiment_3 ?>" alt="<? echo htmlspecialchars($experiment_3_title) ?>" title="<? echo htmlspecialchars($experiment_3_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_3_title) ?></h3>
                    <?
	                if(strlen($experiment_3_desc) > 500) $experiment_3_desc = substr($experiment_3_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_3_desc) ?></p>
                    <a  href="lab_getExp.php<? echo $globalLink ?>&exp_ID=turrentblok&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
                 <li>
                	<p class="pHolder">
                        <a class="linkImg" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=pokeblok&exp_Type=vid">
                            <img src="<? echo $experiment_1 ?>" alt="<? echo htmlspecialchars($experiment_1_title) ?>" title="<? echo htmlspecialchars($experiment_1_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_1_title) ?></h3>
                    <?
	                if(strlen($experiment_1_desc) > 500) $experiment_1_desc = substr($experiment_1_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_1_desc) ?></p>
                    <a  href="lab_getExp.php<? echo $globalLink ?>&exp_ID=pokeblok&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
          </ul>
            <ul class="left right">
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=roboblok&exp_Type=vid">
                            <img src="<? echo $experiment_2 ?>" alt="<? echo htmlspecialchars($experiment_2_title) ?>" title="<? echo htmlspecialchars($experiment_2_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_2_title) ?></h3>
                    <?
	                if(strlen($experiment_2_desc) > 500) $experiment_2_desc = substr($experiment_2_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_2_desc) ?></p>
                    <a  href="lab_getExp.php<? echo $globalLink ?>&exp_ID=roboblok&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
				<li>
                	<p class="pHolder">
                        <a class="linkImg" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=rig&exp_Type=vid">
                            <img src="<? echo $experiment_6 ?>" alt="<? echo htmlspecialchars($experiment_6_title) ?>" title="<? echo htmlspecialchars($experiment_6_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_6_title) ?></h3>
                    <?
	                if(strlen($experiment_6_desc) > 500) $experiment_6_desc = substr($experiment_6_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_6_desc) ?></p>
                    <a  href="lab_getExp.php<? echo $globalLink ?>&exp_ID=rig&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
				<li>
                	<p class="pHolder">
                        <a class="linkImg" href="lab_getExp.php<? echo $globalLink ?>&exp_ID=roverapp&exp_Type=vid">
                            <img src="<? echo $experiment_4 ?>" alt="<? echo htmlspecialchars($experiment_4_title) ?>" title="<? echo htmlspecialchars($experiment_4_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_4_title) ?></h3>
                    <?
	                if(strlen($experiment_4_desc) > 500) $experiment_4_desc = substr($experiment_4_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_4_desc) ?></p>
                    <a  href="lab_getExp.php<? echo $globalLink ?>&exp_ID=roverapp&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
            </ul>
        </li>
    </ul>
	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















