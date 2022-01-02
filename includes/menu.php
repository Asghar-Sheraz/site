        <div class="menu">
            <div class="menuContent">
            <ul>
            <?php
            if ($page=='home'){?>
            <li class="activeOne">HOME</li>
            <?php } else { ?>
            <li><a class="stepOne" href="index.php" >HOME</a></li>
            <?php } ?>

            <?php
            if ($page=='photos'){?>
            <li class="activeTwo">PHOTOS</li>
            <?php } else { ?>
            <li><a class="stepTwo" href="https://www.flickr.com/photos/91279587@N06/" >PHOTOS</a></li>
            <?php } ?>
            
            <?php
            if ($page=='blog'){?>
            <li class="activeOne">BLOG</li>
            <?php } else { ?>
            <li><a class="stepOne" href="http://www.gumpaway.com/blog/" >BLOG</a></li>
            <?php } ?>
            
            </ul>
            </div>
            <div class="menuedge">
            </div>
       	 </div>
