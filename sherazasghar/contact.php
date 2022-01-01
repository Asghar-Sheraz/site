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
<? include "includes/links.php" ?>
<? include 'includes/colorstyle.php' ?>
</head>
<body>
<? include 'includes/header.php'?>
<? include 'includes/loginForm.php'?>
<div  class="mainContainer" style="display:<? echo $content ?>;">
	<div class="contactForm">
    	<p class="pIcon">
        	<span><img src="images/about/placeHolder.png"></span>
        </p>
        <ul>
            <form name="contactform" method="post" action="send_form_email.php?language=<? echo $langID ?>" >
                <li><textarea  placeholder="<? echo htmlspecialchars($firstName) ?>" name="first_name" maxlength="1000" cols="25" rows="6"></textarea></li>
                <li><textarea  placeholder="<? echo htmlspecialchars($lastName) ?>" name="last_name" maxlength="1000" cols="25" rows="6"></textarea></li>
                <li><textarea   placeholder="<? echo htmlspecialchars($email) ?>" name="email" maxlength="1000" cols="25" rows="6"></textarea></li>
                <li><textarea   placeholder="<? echo htmlspecialchars($telephone) ?>" name="telephone" maxlength="1000" cols="25" rows="6"></textarea></li>
                <li><textarea  class="comment"  name="comments" placeholder="<? echo htmlspecialchars($comments) ?>" maxlength="1000" cols="25" rows="6"></textarea></li>
                <li><a href=""><input type="submit" value="<? echo htmlspecialchars($submitBTN) ?>"></a></li>
            </form>
        </ul>
        <ul class="info">
        	<li class="iphoneFix"><h2><? echo htmlspecialchars($info) ?></h2></li>
            <li><? echo htmlspecialchars($sheraz) ?></li>
            <li><? echo htmlspecialchars($tele) ?></li>
            <li><? echo htmlspecialchars($location) ?></li>
            <li>info@sheraz.ninja</li>
            <li class="sociaLinks">
				<a class="vimeo" href="https://vimeo.com/sherazasghar" target="_blank"></a>
            	<a  class="linkdin" href="https://www.linkedin.com/in/sheraz-asghar/"></a>
            	<a class="pinterest" href="https://www.pinterest.com/troyerz/my-artwork/"></a>
                <a style="display: none;" class="youtube" href="https://www.youtube.com/channel/UC5ruxUcngwTxbltHXAeL9sg"></a>
            </li>
        </ul>
    </div>
	<? include 'includes/footer.php'?>
</div>
</body>
</html>