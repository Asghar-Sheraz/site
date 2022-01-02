<?

if  (($langID=="en")|| ($langID=="")){
	$showLangEN ="none";
	$showLangFR ="block";
	$showLangEN_mobile ="0.6";
	$showLangFR_mobile ="1.0";
	}
if ($langID=="fr"){
	$showLangEN ="block";
	$showLangFR ="none";
	$showLangEN_mobile ="1.0";
	$showLangFR_mobile ="0.6";
	}

?>

	<div class="header">
        <ul class="menu">
            <li>
                <a href="index.php<? echo $n ?>">
                	<img src="images/shared/aandlrenovationlogo.png" title="A & L Renovation" />
                </a>
            </li>
            <li>
                <a href="index.php<? echo $n ?>"><? echo htmlspecialchars($home) ?></a>
            </li>
            <li>
                <a href="projects.php<? echo $n ?>"><? echo htmlspecialchars($projects) ?></a>
            </li>
            <li>
                <a href="services.php<? echo $n ?>"><? echo htmlspecialchars($ourServices) ?></a>
            </li>
            <li style="display:none">
                <a href="testimonials.php<? echo $n ?>"><? echo htmlspecialchars($testimonials) ?></a>
            </li>
            <li>
                <a href="contact.php<? echo $n ?>"><? echo htmlspecialchars($contact) ?></a>
            </li>
            <li class="lang" style="display:none">
				<a style="opacity:<? echo $showLangFR_mobile ?>;" href="<? echo $pageLink ?>?language=en">EN</a>
				<a style="opacity:<? echo $showLangEN_mobile ?>;" href="<? echo $pageLink ?>?language=fr">FR</a>
            </li>
        </ul>
        <a class="mobileLogo" href="index.php<? echo $n ?>">
            <img src="images/shared/aandlrenovationlogo.png" title="A & L Renovation" />
        </a>
	    <a class="menuMobileIgnite"></a>
    	<ul class="menuMobile">
            <li class="m1">
                <a href="index.php<? echo $n ?>"><? echo htmlspecialchars($home) ?></a>
            </li>
            <li class="m2">
                <a href="projects.php<? echo $n ?>"><? echo htmlspecialchars($projects) ?></a>
            </li>
            <li class="m3" style="border-bottom:none">
                <a href="services.php<? echo $n ?>"><? echo htmlspecialchars($ourServices) ?></a>
            </li>
            <li class="m4" style="display:none">
                <a href="testimonials.php<? echo $n ?>"><? echo htmlspecialchars($testimonials) ?></a>
            </li>
            <li class="m5" style="border-right:none">
                <a href="contact.php<? echo $n ?>"><? echo htmlspecialchars($contact) ?></a>
            </li>
            <li class="lang" style="display:none">                
            	<a style="opacity:<? echo $showLangFR_mobile ?>;" href="<? echo $pageLink ?>?language=en">EN</a>
                <a style="opacity:<? echo $showLangEN_mobile ?>;" href="<? echo $pageLink ?>?language=fr">FR</a>
            </li>
        </ul>
	</div>