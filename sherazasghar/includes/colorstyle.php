<style>
/**header **/
#header .menuHolder ul li a{
	color:#fff;
	}
#header .menuHolder ul .language ul li a{
	color:#fff;
	}
#header .menuHolder ul .language ul li a:hover{
	background: #fff;
	}
#header {
	background:<? echo $color ?>;
	}
.footer{
	background-color:<? echo $color ?>;
	}
.footer div .menu li a{
	color:#fff;
	}
#header .menuHolder ul .language ul li a{
	background: <? echo $colorLight ?>;
	border-bottom: 1px solid <? echo $color ?>;
	}
#header .menu .lang .lang_li .lang_a{
	color:<? echo $color ?>;
	}
#header .menuHolder ul .language ul li a:hover{
	color:<? echo $color ?>;
	}
#header .menuMobile{
	border-top:<? echo $colorLight ?> solid 1px;
	}
#header .logo_mobile{
	background-image:url(../images/sharedImg/logoSA_default.png);
	}
#header .menuMobile li a{
	color:#fff;
}
#header .menuMobile .lang_li_Mobile #activeLang{
	background-color:#fff;
}
#header .menuMobile .lang_li_Mobile a{
	color:#fff;
}
#header .menuMobile .lang_li_Mobile a:hover{
	background-color:#fff;
}
	
@media (max-width: 1024px) {	
#header .menuMobile li{
	border-right: 1px solid <? echo $colorLight ?>;
}
}
#header .menuMobile li{
	border-right: 1px solid <? echo $colorLight ?>;
}
#header .menuMobile .lang_li_Mobile a{
	background: none repeat scroll 0 0 <? echo $colorLight ?>;
}
#header .menuMobile .lang_li_Mobile a:hover{
	color:<? echo $colorLight ?>;
}
#header .menuMobile .lang_li_Mobile #activeLang{
	color:<? echo $color ?>;
}
#header .menuMobile .border4{
	border-right: 1px solid <? echo $colorLight ?>;
}

#header .menuMobile .border6{
	border-right: 1px solid <? echo $colorLight ?>;
}
@media (max-width: 640px) {	
	#header .menuMobile li{
		border-right: 0px solid <? echo $colorLight ?>;
		border-bottom: 1px solid <? echo $colorLight ?>;
	}
	#header .menuMobile .border1{
		border-bottom: 1px solid <? echo $colorLight ?>;
		border-right: 1px solid <? echo $colorLight ?>;
	}
	#header .menuMobile .border2{
		border-bottom: 1px solid <? echo $colorLight ?>;
	}
	#header .menuMobile .border3{
		border-right: 1px solid <? echo $colorLight ?>;
	}
	#header .menuMobile .lang_li_Mobile{
		background: none repeat scroll 0 0 <? echo $colorLight ?>;
	}
	#header .menuMobile .border3{
		border-bottom: 1px solid <? echo $colorLight ?>
	}
	#header .menuMobile .border4{
		border-bottom: 1px solid <? echo $colorLight ?>;
		border-right:none;
	}
	#header .menuMobile .border6{
		border-right: 1px solid <? echo $colorLight ?>;
	}
}
	#header .menuMobileIgnite{
	background-image:url(../images/sharedImg/mobileMenuBtn_default.png);
	}
.slides-navigation a.down {
	background-color:<? echo $color ?>;
	background-image:url(../images/sharedImg/down.png);
	margin-top: 0;
	}
.slides-navigation a.next {
	background:<? echo $color ?>;
	background-image:url(../images/sharedImg/next.png);
	}
	
<? if ($langID == "ar") { ?> 
	.slides-navigation a.prev {
		background:<? echo $color ?>;
		background-image:url(images/sharedImg/prev.png);
		border-right:none;
		}
	.slides-navigation a.next{
		border-left: <? echo $bannerBtnBorder ?> 1px solid solid 1px;
	}
		<?  } else { ?>
		.slides-navigation a.prev {
			background:<? echo $color ?>;
			background-image:url(images/sharedImg/prev.png);
			}
	
	<?	}?>

.slides-navigation a.down {
	background-color:<? echo $color ?>;
	background-image:url(../images/sharedImg/down.png);
	}
	
.slides-navigation div .vidBtn {
    background-color:<? echo $color ?>;
	}
.slides-navigation div .vidBtn:hover{
	color:#fff;
	background-color:<? echo $color ?>;
	}
#slides .slides-navigation .bannerContent .projectTitle {
	color:<? echo $color ?>;
	}
#slides .slides-navigation .bannerContent .button:hover {
	color:<? echo $color ?>;
	}
#slides .slides-navigation .bannerContent .button {
	background:<? echo $color ?>;
	}
#slides .slides-navigation .bannerContent .textBtn:hover  {
	color: <? echo $color ?>;
	}

/**shared**/
h1, h2, h3 {
	color:<? echo $color ?>;
}
p {
	}
a {
	color:#000;
	}
/**home**/
.projectContainer_2 ul .list_2 .lab{
	background-color:<? echo $colorLab ?>;
	}
.projectContainer_2 ul .list_2 .about{
	background-color:<? echo $colorAbout ?>;
	}
.projectContainer_2 ul .list_2 .contact{
	background-color:<? echo $colorContact ?>;
	}
.projectContainer .left li .pHolder{
	background-image:url(../images/sharedImg/logoSA_default.png);
	}
.projectContainer .right li .pHolder{
	background-image:url(../images/sharedImg/logoSA_default.png);
	}
.projectContainer_2 ul .list_2 h2{
	color:#fff;
	}


/**projects**/
.artWorkHalo{
	background-color:<? echo $color ?>;
	}
.levelOne .tool_ul .tool_li{
	background-color:<? echo $color ?>;
	}
.default_Artwork .contentCenter .imgHolder .pHolder{
	background-image:url(../images/sharedImg/logoSA_default.png);
	}


/**Artwork**/
.default_Artwork li ul li .pHolder{
	background-image:url(../images/sharedImg/logoSA_default.png);
	}
/**about**/
.mobile_videos li .pHolder{
	background-image:url(../images/sharedImg/logoSA_default.png);
	}

/**social**/
.socialNetwork ul{
	border-top:1px dotted <? echo $color ?>;
	}
/**about**/
	.summary .pIcon span img{
		background-color: <? echo $color ?>;
	}
	.summary .pIcon span img{
		background-image: url(../images/projects/about_default.png);
		}
	.summary .right li ul li img{
		background-color:<? echo $imgBG_Color ?>;
	}
	
/**video**/
.vidContainer .thumbs div .navIT li .pHolder{
	background-image:url(../images/sharedImg/logoSA_default.png);
	}

/**contact**/
textarea{
	color:<? echo $colorException ?>;
	background-color:<? echo $color ?>;
	}
textarea:hover{
	background-color:<? echo $colorLight ?>;
	}
.levelOne_Contact .incompleteInfo{
	color: <? echo $color ?>;
}
.levelOne_Contact .thanks{
	color: <? echo $color ?>;
}
.contactForm ul li a input{
	background-color:<? echo $color ?>;
	color:<? echo $colorException ?>;
}
.contactForm ul a:hover input{
	color:<? echo $colorLight ?>;
}
.contactForm .info li .linkdin{
	background-image:url(../images/sharedImg/linkedinIcon_<? echo $iconException ?>.png);
	}
.contactForm .info li .pinterest{
	background-image:url(../images/sharedImg/pinterestIcon_<? echo $iconException ?>.png);
	}
.contactForm .info li .youtube{
	background-image:url(../images/sharedImg/youtubeIcon_<? echo $iconException ?>.png);
	}
.contactForm .info li .vimeo{
	background-image:url(../images/sharedImg/vimeoIcon_<? echo $iconException ?>.png);
	}
.contactForm .pIcon span img{
	background-image: url(../images/projects/montreal_default.png);
	}
.contactForm .right li ul li img{
	background-color:<? echo $imgBG_Color ?>;
}
.contactForm .pIcon span img{
	background-color: <? echo $color ?>;
}
/*login*/
.loginMain{
	background-color:<? echo $login_BG ?>;
	}
.loginMain ul{
	}
.loginMain ul li{
	}
.loginMain ul li .passwordInput{
	background-color:<? echo $inputPS_BG ?>;
	color: <? echo $inputPS_text ?>;
	}
.loginMain ul li .passwordSubmit{
	background-color:<? echo $inputPS_BG ?>;
	color: <? echo $inputPS_text ?>;
		}

.loginMain ul .lang a{
	background-color: <? echo $inputPS_BG ?>;
}
.loginMain ul .lang a:hover{
	background-color:<? echo $login_links ?>;
	color:#fff;
}
.loginMain ul .lang .gotSelect{
	background-color:<? echo $login_links ?>;
	color:#fff;
}

</style>



















