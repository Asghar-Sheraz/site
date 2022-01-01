<?
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
?>
    <div class="footer">
    	<div>
            <ul>
                <li><a class="facebookIcon" href="https://vimeo.com/sherazasghar" target="_blank"><img border="0" src="/images/sharedImg/vimeoIcon_default.png"></a></li>
                <li><a class="linkedinIcon" href="https://www.linkedin.com/in/sheraz-asghar/" target="_blank"><img border="0" src="/images/sharedImg/linkedinIcon_default.png"></a></li>
                <li><a class="pinterestIcon" href="https://www.pinterest.com/troyerz/my-artwork/" target="_blank"><img border="0" src="/images/sharedImg/pinterestIcon_default.png"></a></li>
                <li style="display: none"><a class="youtubeIcon" href="https://www.youtube.com/channel/UC5ruxUcngwTxbltHXAeL9sg" target="_blank"><img border="0" src="/images/sharedImg/youtubeIcon_default.png"></a></li>
            </ul>
            <ul class="menu">
            <li><a class="<? echo $isActive_M4 ?>" href="/contact.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_4) ?></a></li>
            <li><a class="<? echo $isActive_M5 ?>" href="/about.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_5) ?></a></li>
            <li><a class="<? echo $isActive_M7 ?>" href="/lab.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_7) ?></a></li>
            <li><a class="<? echo $isActive_M6 ?>" href="/artwork.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_6) ?></a></li>
            <li><a class="<? echo $isActive_M3 ?>" href="/videos.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_3) ?></a></li>
            <li><a class="<? echo $isActive_M2 ?>" href="/projects.php<? echo $globalLink ?>"><? echo htmlspecialchars($menuItem_2) ?></a></li>
            </ul>
        	<div><img src="/images/sharedImg/logoSA_default.png" alt="Sheraz Asghar" title="Sheraz Asghar" /></div>
        </div>
    </div>
