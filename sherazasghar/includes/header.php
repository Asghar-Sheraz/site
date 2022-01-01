<?

	$en="EN";
	$de="DE";
	$fr="FR";
	$es="ES";
	$ar="العربية";
	$jp="日本語";
	$menuItem_1="HOME";
	$menuItem_2="PROJECTS";
	$menuItem_3="VIDEOS";
	$menuItem_4="CONTACT";
	$menuItem_5="ABOUT";
	$menuItem_6="DESIGN";
	$menuItem_7="LAB";

if ($langID=="en"){
	$menuItem_1="HOME";
	$menuItem_2="PROJECTS";
	$menuItem_3="VIDEOS";
	$menuItem_4="CONTACT";
	$menuItem_5="ABOUT";
	$menuItem_6="DESIGN";
	$menuItem_7="LAB";
}
if ($langID=="de"){
	$menuItem_1="STARTSEITE";
	$menuItem_2="PROJEKTE";
	$menuItem_3="VIDEOS";
	$menuItem_4="KONTAKT";
	$menuItem_5="ÜBER";
	$menuItem_6="DESIGN";
	$menuItem_7="LABOR";
}
if ($langID=="fr"){
	$menuItem_1="ACCUEIL";
	$menuItem_2="PROJETS";
	$menuItem_3="VIDÉOS";
	$menuItem_4="CONTACT";
	$menuItem_5="À PROPOS";
	$menuItem_6="CONCEPTION";
	$menuItem_7="LABORATOIRE";
}
if ($langID=="es"){
	$menuItem_1="INICIO";
	$menuItem_2="PROYECTOS";
	$menuItem_3="VIDEOS";
	$menuItem_4="CONTACTO";
	$menuItem_5="ACERCA DE MI";
	$menuItem_6="DISEÑO";
	$menuItem_7="LABORATORIO";
}
if ($langID=="ar"){
	$menuItem_1="الصفحة الرئيسية";
	$menuItem_2="مشاريع";
	$menuItem_3="أشرطة الفيديو";
	$menuItem_4="اتصال";
	$menuItem_5="حول";
	$menuItem_6="العمل الفني";
	$menuItem_7="مختبر";
}
if ($langID=="jp"){
	$menuItem_1="ホームページ";
	$menuItem_2="プロジェクト";
	$menuItem_3="ビデオ";
	$menuItem_4="コンタクト";
	$menuItem_5="私について";
	$menuItem_6="設計";
	$menuItem_7="研究室";
}
if ($pageID=="halo"){
	$isActive_M1 = "activeState";
}
if (($pageID=="projects") || ($pageID=="minion") || ($pageID=="halo")){
	$isActive_M2 = "activeState";
}
if ($pageID=="videos"){
	$isActive_M3 = "activeState";
}
if ($pageID=="contact"){
	$isActive_M4 = "activeState";
}
if ($pageID=="about"){
	$isActive_M5 = "activeState";
}
if ($pageID=="artwork"){
	$isActive_M6 = "activeState";
}
if ($pageID=="lab"){
	$isActive_M7 = "activeState";
}

if ($langID==""){
	$isActiveLang_en = "activeLang";
	$menuSize = "135%";
}
if ($langID=="en"){
	$isActiveLang_en = "activeLang";
	$menuSize = "135%";
}
if ($langID=="de"){
	$isActiveLang_de = "activeLang";
	$menuSize = "135%";
}
if ($langID=="fr"){
	$isActiveLang_fr = "activeLang";
	$menuSize = "110%";
}
if ($langID=="es"){
	$isActiveLang_es = "activeLang";
	$menuSize = "100%";
}
if ($langID=="ar"){
	$isActiveLang_ar = "activeLang";
	$menuSize = "141%";
}
if ($langID=="jp"){
	$isActiveLang_jp = "activeLang";
	$menuSize = "125%";
}
if ($_SERVER['SERVER_NAME']=="sheraz.ninja"){
	$linkMan = "sheraz.ninja";
} else if ($_SERVER['SERVER_NAME']=="sheraz.ca"){
	$linkMan = "sheraz.ca";
} 
	
if (($nID == "guest") and (($pageID == "contact") || ($pageID == "about")))
	
	{
		$logState_active = "geoID";
		$logState = "";
		$linkGuest ="&n=guest";
		
		} else 
		{
			$logState_active = "geoID";
			$logState = "geoID";
			$linkGuest ="";
			}

//$globalLink = "?language=".$langID."&neo=".$logState;
$globalLink = "?language=".$langID;

?>

<div id="header" style="display:<? echo $header ?>;">
	<div class="menuHolder">
        <ul style="width:<? echo $menuSize ?>;">
            <li class="logo">
                <a class="logoSA" href="http://<? echo $linkMan ?><? echo $globalLink ?>" target="_self">
                    <img src="../images/sharedImg/logoSA_default.png" border="0" alt="Sheraz Asghar" title="Sheraz Asghar" >
                </a>
            </li>
            <li class="arabicMn"><a class="<? echo $isActive_M2 ?>" href="/index.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_2) ?></a></li>
            <li class="arabicMn"><a class="<? echo $isActive_M3 ?>" href="/videos.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_3) ?></a></li>
            <li class="arabicMn"><a class="<? echo $isActive_M6 ?>" href="/artwork.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_6) ?></a></li>
            <li class="arabicMn"><a class="<? echo $isActive_M7 ?>" href="/lab.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_7) ?></a></li>
            <li class="arabicMn"><a class="<? echo $isActive_M5 ?>" href="/about.php?language=<? echo $langID ?>&neo=<? echo $logState_active ?><? echo $linkGuest ?>"><? echo htmlspecialchars($menuItem_5) ?></a></li>
            <li class="arabicMn"><a class="<? echo $isActive_M4 ?>" href="/contact.php?language=<? echo $langID ?>&neo=<? echo $logState_active ?><? echo $linkGuest ?>"><? echo htmlspecialchars($menuItem_4) ?></a></li>
            <li class="language">
            	<ul>
				<? if ($langID=="") {?>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=en&neo=<? echo $logState ?>"><? echo htmlspecialchars($en) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=fr&neo=<? echo $logState ?>"><? echo htmlspecialchars($fr) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=de&neo=<? echo $logState ?>"><? echo htmlspecialchars($de) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=es&neo=<? echo $logState ?>"><? echo htmlspecialchars($es) ?></a></li>
                        <li><a style="font-family: 'Noto Sans Japanese', sans-serif; font-size:12px" href="<? echo $pageLink ?>?language=jp&neo=<? echo $logState ?>"><? echo htmlspecialchars($jp) ?></a></li>
                        <li><a style="font-family: 'Droid Arabic Naskh', serif; font-size:12px" href="<? echo $pageLink ?>?language=ar&neo=<? echo $logState ?>"><? echo htmlspecialchars($ar) ?></a></li>
                <? }?>
				<? if ($langID=="en") {?>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=en&neo=<? echo $logState ?>"><? echo htmlspecialchars($en) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=fr&neo=<? echo $logState ?>"><? echo htmlspecialchars($fr) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=de&neo=<? echo $logState ?>"><? echo htmlspecialchars($de) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=es&neo=<? echo $logState ?>"><? echo htmlspecialchars($es) ?></a></li>
                        <li><a style="font-family: 'Noto Sans Japanese', sans-serif; font-size:12px" href="<? echo $pageLink ?>?language=jp&neo=<? echo $logState ?>"><? echo htmlspecialchars($jp) ?></a></li>
                        <li><a style="font-family: 'Droid Arabic Naskh', serif; font-size:12px" href="<? echo $pageLink ?>?language=ar&neo=<? echo $logState ?>"><? echo htmlspecialchars($ar) ?></a></li>
                <? }?>
				<? if ($langID=="fr") {?>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=fr&neo=<? echo $logState ?>"><? echo htmlspecialchars($fr) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=en&neo=<? echo $logState ?>"><? echo htmlspecialchars($en) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=de&neo=<? echo $logState ?>"><? echo htmlspecialchars($de) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=es&neo=<? echo $logState ?>"><? echo htmlspecialchars($es) ?></a></li>
                        <li><a style="font-family: 'Noto Sans Japanese', sans-serif; font-size:12px" href="<? echo $pageLink ?>?language=jp&neo=<? echo $logState ?>"><? echo htmlspecialchars($jp) ?></a></li>
                        <li><a style="font-family: 'Droid Arabic Naskh', serif; font-size:12px" href="<? echo $pageLink ?>?language=ar&neo=<? echo $logState ?>"><? echo htmlspecialchars($ar) ?></a></li>
                <? }?>
				<? if ($langID=="de") {?>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=de&neo=<? echo $logState ?>"><? echo htmlspecialchars($de) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=en&neo=<? echo $logState ?>"><? echo htmlspecialchars($en) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=fr&neo=<? echo $logState ?>"><? echo htmlspecialchars($fr) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=es&neo=<? echo $logState ?>"><? echo htmlspecialchars($es) ?></a></li>
                        <li><a style="font-family: 'Noto Sans Japanese', sans-serif; font-size:12px" href="<? echo $pageLink ?>?language=jp&neo=<? echo $logState ?>"><? echo htmlspecialchars($jp) ?></a></li>
                        <li><a style="font-family: 'Droid Arabic Naskh', serif; font-size:12px" href="<? echo $pageLink ?>?language=ar&neo=<? echo $logState ?>"><? echo htmlspecialchars($ar) ?></a></li>
                <? }?>
				<? if ($langID=="es") {?>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=es&neo=<? echo $logState ?>"><? echo htmlspecialchars($es) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=en&neo=<? echo $logState ?>"><? echo htmlspecialchars($en) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=fr&neo=<? echo $logState ?>"><? echo htmlspecialchars($fr) ?></a></li>
                        <li><a style="font-family: 'Open Sans',	 sans-serif" href="<? echo $pageLink ?>?language=de&neo=<? echo $logState ?>"><? echo htmlspecialchars($de) ?></a></li>
                        <li><a style="font-family: 'Noto Sans Japanese', sans-serif; font-size:12px" href="<? echo $pageLink ?>?language=jp&neo=<? echo $logState ?>"><? echo htmlspecialchars($jp) ?></a></li>
                        <li><a style="font-family: 'Droid Arabic Naskh', serif; font-size:12px" href="<? echo $pageLink ?>?language=ar&neo=<? echo $logState ?>"><? echo htmlspecialchars($ar) ?></a></li>
                <? }?>
				<? if ($langID=="jp") {?>
                        <li><a style="font-family: 'Noto Sans Japanese', sans-serif; font-size:12px" href="<? echo $pageLink ?>?language=jp&neo=<? echo $logState ?>"><? echo htmlspecialchars($jp) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=en&neo=<? echo $logState ?>"><? echo htmlspecialchars($en) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=fr&neo=<? echo $logState ?>"><? echo htmlspecialchars($fr) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=de&neo=<? echo $logState ?>"><? echo htmlspecialchars($de) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=es&neo=<? echo $logState ?>"><? echo htmlspecialchars($es) ?></a></li>
                        <li><a style="font-family: 'Droid Arabic Naskh', serif; font-size:12px" href="<? echo $pageLink ?>?language=ar&neo=<? echo $logState ?>"><? echo htmlspecialchars($ar) ?></a></li>
                <? }?>
				<? if ($langID=="ar") {?>
                        <li><a style="font-family: 'Droid Arabic Naskh', serif; font-size:12px" href="<? echo $pageLink ?>?language=ar&neo=<? echo $logState ?>"><? echo htmlspecialchars($ar) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=en&neo=<? echo $logState ?>"><? echo htmlspecialchars($en) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=fr&neo=<? echo $logState ?>"><? echo htmlspecialchars($fr) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=de&neo=<? echo $logState ?>"><? echo htmlspecialchars($de) ?></a></li>
                        <li><a style="font-family: 'Open Sans', sans-serif" href="<? echo $pageLink ?>?language=es&neo=<? echo $logState ?>"><? echo htmlspecialchars($es) ?></a></li>
                        <li><a style="font-family: 'Noto Sans Japanese', sans-serif; font-size:12px" href="<? echo $pageLink ?>?language=jp&neo=<? echo $logState ?>"><? echo htmlspecialchars($jp) ?></a></li>
                <? }?>
		        </ul>
            </li>
        </ul>
	</div>
    <a  class="logo_mobile"  href="http://sheraz.ninja<? echo $globalLink ?>" target="_self"></a>
    <a class="menuMobileIgnite"></a>
    <ul class="menuMobile" >
        <li class="border1"><a  class="<? echo $isActive_M2 ?>" href="/index.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_2) ?></a></li>
        <li class="border2"><a  class="<? echo $isActive_M3 ?>" href="/videos.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_3) ?></a></li>
        <li class="border3"><a  class="<? echo $isActive_M6 ?>" href="/artwork.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_6) ?></a></li>
        <li class="border4"><a  class="<? echo $isActive_M7 ?>" href="/lab.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_7) ?></a></li>
        <li class="border6"><a  class="<? echo $isActive_M5 ?>" href="/about.php?language=<? echo $langID ?>&neo=<? echo $logState_active ?><? echo $linkGuest ?>"><? echo htmlspecialchars($menuItem_5) ?></a></li>
        <li class="border5"><a  class="<? echo $isActive_M4 ?>" href="/contact.php?language=<? echo $langID ?>&neo=<? echo $logState_active ?><? echo $linkGuest ?>"><? echo htmlspecialchars($menuItem_4) ?></a></li>
        <li class="lang_li_Mobile push" style="font-family: 'Open Sans', sans-serif;"><a id="<? echo $isActiveLang_en ?>" href="<? echo $pageLink ?>?language=en&neo=<? echo $logState ?>"><? echo htmlspecialchars($en) ?></a></li>
        <li class="lang_li_Mobile" style="font-family: 'Open Sans', sans-serif;"><a id="<? echo $isActiveLang_de ?>" href="<? echo $pageLink ?>?language=de&neo=<? echo $logState ?>"><? echo htmlspecialchars($de) ?></a></li>
        <li class="lang_li_Mobile" style="font-family: 'Open Sans', sans-serif;"><a id="<? echo $isActiveLang_fr ?>" href="<? echo $pageLink ?>?language=fr&neo=<? echo $logState ?>"><? echo htmlspecialchars($fr) ?></a></li>
        <li class="lang_li_Mobile" style="font-family: 'Open Sans', sans-serif;"><a id="<? echo $isActiveLang_es ?>" href="<? echo $pageLink ?>?language=es&neo=<? echo $logState ?>"><? echo htmlspecialchars($es) ?></a></li>
        <li class="lang_li_Mobile arabicMn" ><a style="font-family:'Droid Arabic Naskh', serif;" id="<? echo $isActiveLang_ar ?>" href="<? echo $pageLink ?>?language=ar&neo=<? echo $logState ?>"><? echo htmlspecialchars($ar) ?></a></li>
        <li class="lang_li_Mobile"><a id="<? echo $isActiveLang_jp ?>" href="<? echo $pageLink ?>?language=jp&neo=<? echo $logState ?>"><? echo htmlspecialchars($jp) ?></a></li>
    </ul>
</div>
