
<?
if (($langID=="") || ($langID=="en")){
	$gotSelect_en = "gotSelect";
	}
else if ($langID=="fr"){
	$gotSelect_fr = "gotSelect";
	}
else if ($langID=="de"){
	$gotSelect_de = "gotSelect";
	}
else if ($langID=="es"){
	$gotSelect_es = "gotSelect";
	}
else if ($langID=="jp"){
	$gotSelect_jp = "gotSelect";
	}
else if ($langID=="ar"){
	$gotSelect_ar = "gotSelect";
	}

?>
<div class="loginMain" style="display:none;">
    <form action="index.php?language=<? echo $langID ?>" method="post">
    	<ul>
            <li>
				<img src="../images/sharedImg/logoSA_<? echo $goNinja_login ?>.png">
            </li>
            <li>
                <input class="passwordInput" type="password" placeholder="<? echo $password?>" name="pass"/>
            </li>
            <li>
                <input class="passwordSubmit" type="submit" value="<?  echo htmlspecialchars($access) ?>">
            </li>
            <li class="links">
                <a href="about.php?language=<? echo $langID ?>&neo=geoID&n=guest"><? echo $menuItem_5 ?></a> | <a href="contact.php?language=<? echo $langID ?>&neo=geoID&n=guest"><? echo htmlspecialchars($getAccess) ?></a>
            </li>
            <li class="lang">
            	<a class="<? echo $gotSelect_en ?>" style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=en&neo=guest"><? echo htmlspecialchars($en) ?></a>
            	<a class="<? echo $gotSelect_fr ?>" style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=fr&neo=guest"><? echo htmlspecialchars($fr) ?></a>
                <a class="<? echo $gotSelect_de ?>" style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=de&neo=guest"><? echo htmlspecialchars($de) ?></a>
                <a class="<? echo $gotSelect_es ?>" style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=es&neo=guest"><? echo htmlspecialchars($es) ?></a>
                <a class="<? echo $gotSelect_jp ?> jp" style="font-family: 'Open Sans', sans-serif;" href="<? echo $pageLink ?>?language=jp&neo=guest"><? echo htmlspecialchars($jp) ?></a>
            	<a class="<? echo $gotSelect_ar ?> ar" style="font-family: 'Open Sans', sans-serif;" href="<? echo $pageLink ?>?language=ar&neo=guest"><? echo htmlspecialchars($ar) ?></a>
            </li>
    	</ul>
    </form>
</div>
