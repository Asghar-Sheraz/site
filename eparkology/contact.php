<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Eparkology - Contact page</title>
<?php include 'includes/meta.php'; ?>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:200,300,400,600,700' rel='stylesheet' type='text/css'>

<?
$page = 'contact';

$menuItem1Selected = 'menuItem1Selected';
$menuItem2Selected = 'menuItem2Selected';
$menuItem3Selected = 'menuItem3Selected';
$menuItem4Selected = 'menuItem4Selected';
?>

<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">

</head>
<body class="body">
		<?php include 'includes/menu.php'; ?>
        <div class="contact">
        	<div class="contactContent">
                <h2>CONTACT</h2>
                	<form name="contactform" method="post" action="send_form_email.php">
            	<ul>
                    <li>
   	               	  <label for="first_name">First Name <span style="color:#FF0000">*</span></label>
                      <input  type="text" name="first_name" maxlength="50" size="30">
                    </li>
                    <li>
                      <label for="last_name">Last Name <span style="color:#FF0000">*</span></label>
                      <input  type="text" name="last_name" maxlength="50" size="30">
                    </li>
                    <li>
                      <label for="email">Email Address <span style="color:#FF0000">*</span></label>
                      <input  type="text" name="email" maxlength="80" size="30">
                    </li>
                    <li>
                      <label for="telephone">Telephone Number</label>
                      <input  type="text" name="telephone" maxlength="30" size="30">
                    </li>
                    <li>
                      <label for="comments">Comments <span style="color:#FF0000">*</span></label>
                      <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                    </li>
                    <li class="submitBtn">
                      <a href=""><input class="field" type="submit" value="Submit"></a>
                    </li>
                 </ul>
					</form>
                 <ul class="contactInfo">
                     <li><a href="http://www.linkedin.com/profile/view?id=133400296&snapshotID=&authType=name&authToken=AG24&ref=NUS&goback=.nmp_*1_*1_*1_*1_*1_*1_*1_*1_*1&trk=NUS-body-member-name" target="_blank">Shaazad Asghar</a></li>
                     <li class="fontAdj">Parkology Consulting</li>
                     <li class="fontAdj">1934 Old Gallows Road, Ste. 350</li>
                     <li class="fontAdj">Vienna, VA 22182</li>
                     <li class="fontAdj">Office: 202-630-6371</li>
                     <li class="fontAdj">Cell: 202-200-6470</li>
                 </ul>
            </div>
        </div>
		
		<?php include 'includes/footer.php'; ?>
</body>
</html>
