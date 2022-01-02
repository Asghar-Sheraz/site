<!doctype html>
<html>
<head>
<?
$pageID="services";
include 'includes/meta.php';

?>
<link rel="stylesheet" href="css/services.css">
<?
include 'includes/links.php';
?>
</head>
<body>
<? include 'includes/header.php';
?>
    <div class="container">
       <ul class="services">
            <li class="heading">
                <h1><? echo htmlspecialchars($ourServices) ?></h1>
                <span></span>            	
            </li>
            <li class="servicesContent">
            	<ul>
                	<li>
                        <h2><? echo htmlspecialchars($s1) ?></h2>
                        <p><? echo htmlspecialchars($s1_content) ?></p>
                    </li>
                	<li class="alt">
                        <h2><? echo htmlspecialchars($s2) ?></h2>
                        <p><? echo htmlspecialchars($s2_content) ?></p>
                    </li>
                	<li>
                        <h2><? echo htmlspecialchars($s3) ?></h2>
                        <p><? echo htmlspecialchars($s3_content) ?></p>
                    </li>
                	<li class="alt">
                        <h2><? echo htmlspecialchars($s4) ?></h2>
                        <p><? echo htmlspecialchars($s4_content) ?></p>
                    </li>
                	<li>
                        <h2><? echo htmlspecialchars($s5) ?></h2>
                        <p><? echo htmlspecialchars($s5_content) ?></p>
                    </li>
                	<li class="alt">
                        <h2><? echo htmlspecialchars($s6) ?></h2>
                        <p><? echo htmlspecialchars($s6_content) ?></p>
                    </li>
                </ul>
            </li>
            
       </ul>
     
		<? include 'includes/footer.php'?>
    </div>
</body>
</html>









































