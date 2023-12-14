<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'unity';
include_once "includes/sharedPageContent.php";
include_once "includes/projectContent.php";
include_once "includes/unityContent_text.php";
	
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
        <h2><? echo htmlspecialchars($unity); ?></h2>
         <ul class="left">
				<li>
                	<p class="pHolder">
                        <a class="linkImg" href="unity_getContent.php<? echo $globalLink ?>&exp_ID=machineOne&exp_Type=vid">
                            <img src="<? echo $experiment_8 ?>" alt="<? echo htmlspecialchars($experiment_8_title) ?>" title="<? echo htmlspecialchars($experiment_8_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_8_title) ?></h3>
                    <?
	                if(strlen($experiment_8_desc) > 500) $experiment_8_desc = substr($experiment_8_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_8_desc) ?></p>
                    <a  href="unity_getContent.php<? echo $globalLink ?>&exp_ID=machineOne&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
          </ul>
            <ul class="left right">
                <li>
                	<p class="pHolder">
                        <a class="linkImg" href="unity_getContent.php<? echo $globalLink ?>&exp_ID=roboblok&exp_Type=vid">
                            <img src="<? echo $experiment_2 ?>" alt="<? echo htmlspecialchars($experiment_2_title) ?>" title="<? echo htmlspecialchars($experiment_2_title) ?>" />
                        </a>
                    </p>
                    <h3><? echo htmlspecialchars($experiment_2_title) ?></h3>
                    <?
	                if(strlen($experiment_2_desc) > 500) $experiment_2_desc = substr($experiment_2_desc, 0, 1000);
					?>
                    <p><? echo htmlspecialchars($experiment_2_desc) ?></p>
                    <a  href="unity_getContent.php<? echo $globalLink ?>&exp_ID=roboblok&exp_Type=vid"><? echo htmlspecialchars($seeExperiment) ?></a>
                </li>
            </ul>
        </li>
    </ul>
	<? include 'includes/social_includes.php'?>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>
















