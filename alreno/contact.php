<!doctype html>
<html>
<head>
<?

$pageID="contact";
include 'includes/meta.php';
?>
<link rel="stylesheet" href="css/contact.css">
<?
include 'includes/links.php';
?>
</head>
<body>
<? include 'includes/header.php';
?>
    <div class="container">
       <ul class="contact">
            <li class="heading">
                <h1><? echo htmlspecialchars($contact) ?></h1>
                <span></span>            	
            </li>
            <li class="contactContent">
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
            </li>
       </ul>
	   <? include 'includes/footer.php'?>
    </div>
</body>
</html>









































