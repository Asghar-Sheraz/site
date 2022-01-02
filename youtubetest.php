<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<style>
.video{
	margin-bottom:14px;
	width:100%;
}
.video-box{
	height:220px;
	width:391px;
	position:relative;
}

.video-thumbnail{
	z-index:300;
	position:absolute;
	top:0;
	left:0;
	width:100%;
}

.video-frame{
	z-index:100;
	position:absolute;
	top:0;
	left:0;
	width:100%;
}

.thumbnail-link .video-thumbnail{
	display:block;
}

.thumbnail-link:hover .video-thumbnail{
	display:none;
}
</style>
</head>

<body>


<div class="video">
    <div class="video-box">
        <a class="thumbnail-link">
            <img src="http://i.ytimg.com/vi/4pd_em6ruYQ/maxresdefault.jpg" class="video-thumbnail">
             <iframe class="video-frame" width="100%" height="100%" src="//www.youtube.com/embed/4pd_em6ruYQ?vq=hd720&showinfo=0&autohide=1&color=white&controls=2&modestbranding=1&theme=light" frameborder="0" allowfullscreen >
                </iframe>
        </a>
    </div>
</div>
</body>
</html>