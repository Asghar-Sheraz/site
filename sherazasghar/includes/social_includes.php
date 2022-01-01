 
	 <?
if ($pageID == "halo"){

	$FB = "http://sherazasghar.com/";
    $TT = "http://sherazasghar.com";
    $LI = "http://www.sherazasghar.com/";
}
if ($pageID == "about"){

	$FB = "http://sherazasghar.com/about.php";
    $TT = "http://sherazasghar.com/about.php";
    $LI = "http://www.sherazasghar.com/about.php";
}
if ($pageID == "artwork"){

	$FB = "http://sherazasghar.com/artwork.php";
    $TT = "http://sherazasghar.com/artwork.php";
    $LI = "http://www.sherazasghar.com/artwork.php";
}
if ($pageID == "lab"){

	$FB = "http://sherazasghar.com/lab.php";
    $TT = "http://sherazasghar.com/lab.php";
    $LI = "http://www.sherazasghar.com/lab.php";
}
    
    ?>

 
 
 
    <div class="socialNetwork">
        <ul>
            <li class="fbAdjust">
				<div class="fb-like" data-href="<? echo $FB ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
            </li>
            <li>
	            <a class="tumblr-share-button" data-color="black" data-notes="right" href="https://embed.tumblr.com/share"></a>
			</li>
            <li>
				<script type="IN/Share" data-url="<? echo $LI ?>" data-counter="right"></script>
            </li>
            <li>
                <a href="https://twitter.com/share" class="twitter-share-button" data-counturl="<? echo $TT ?>" data-count="horizontal">Tweet</a>
			</li>
        </ul>
    </div>
