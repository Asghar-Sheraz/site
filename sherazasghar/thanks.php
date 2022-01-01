<!DOCTYPE html>
<html>
<head>
<?
$pageID = 'contact';
include_once "includes/sharedPageContent.php";
include_once "includes/meta.php";
include_once "includes/contactContent.php";
?>
<title><? echo htmlentities($metaTitle) ?></title>
<meta name="description" content="<? echo htmlentities($metaContent) ?>">
<meta name="keywords" content="<? echo htmlentities($metaKeywords) ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="css/contact.css">
<link href='http://fonts.googleapis.com/css?family=Londrina+Solid' rel='stylesheet' type='text/css'>
<? include "includes/links.php" ?>
<? include 'includes/colorstyle.php' ?>
</head>
<body>
<? include 'includes/header.php' ?>
	<div class="contactForm">
            <h2 class="thanks"><? echo htmlspecialchars($thankYou) ?><br /><? echo htmlspecialchars($intouch) ?></h2>
	</div>

<div id="overview" class="mainContainer" style="display:<? echo $content ?>;">
<? include 'includes/footer.php'?>
</div>
</body>
</html>
















