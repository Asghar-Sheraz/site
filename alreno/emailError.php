<!DOCTYPE html>
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
                    <li>
                        <h2 class="incompleteInfo"><? echo htmlspecialchars($errorMsg) ?></h2>
                    </li>
                </ul>
            </li>
       </ul>
	   <? include 'includes/footer.php'?>
    </div>
</body>
</html>
