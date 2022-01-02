<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> <title></title>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script> <script type="text/javascript">
			$(function(){
                jQuery('#a-link').remove();
                
                jQuery('<img />').attr('id', 'loader').attr('src', 'http://cdn.kylerush.org/kr/images/flickr-ajax-loader.gif').appendTo('#image-container');
                
                //assign your api key equal to a variable
                var apiKey = 'acc85882825985de724f2e0842977f3a';
                var id = 72157632284232920;
                //the initial json request to flickr
                //to get your latest public photos, use this request: http://api.flickr.com/services/rest/?&method=flickr.people.getPublicPhotos&api_key=' + apiKey + '&user_id=29096781@N02&per_page=15&page=2&format=json&jsoncallback=?
				$.getJSON('http://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key=' + apiKey + '&photoset_id='+id+'&format=json&jsoncallback=?',
                function(data){
                    
                    //loop through the results with the following function
                    $.each(data.photoset.photo, function(i,item){
                    
                        //build the url of the photo in order to link to it
                        var photoURL = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_m.jpg';
                        
                        //turn the photo id into a variable
                        var photoID = item.id;
                        
                            //use another ajax request to get the geo location data for the image
                            $.getJSON('http://api.flickr.com/services/rest/?&method=flickr.photos.geo.getLocation&api_key=' + apiKey + '&photo_id=' + photoID + '&format=json&jsoncallback=?',
                            function(data){
                                
                                //if the image has a location, build an html snippet containing the data
                                if(data.stat != 'fail') {
                                    pLocation = '<a target="_blank" href="http://www.flickr.com/map?fLat=' + data.photo.location.latitude + '&fLon=' + data.photo.location.longitude + '&zl=1">' + data.photo.location.locality._content + ', ' + data.photo.location.region._content + ' (Click for Map)</a>';
                                }
                            });
                            
                            //use another ajax request to get the tags of the image
                            $.getJSON('http://api.flickr.com/services/rest/?&method=flickr.photos.getInfo&api_key=' + apiKey + '&photo_id=' + photoID + '&format=json&jsoncallback=?',
                            function(data){
                                
                                //if the image has tags
                                if(data.photo.tags.tag != '') {
                                    
                                    //create an empty array to contain all the tags
                                    var tagsArr = new Array();
                                    
                                    //for each tag, run this function
                                    $.each(data.photo.tags.tag, function(j, item){
                                    
                                        //push each tag into the empty 'tagsArr' created above
                                        tagsArr.push('<a href="http://www.flickr.com/photos/tags/' + item._content + '" target="_blank">' + item.raw + '</a>');
                                        
                                    });
                                    
                                    //turn the tags array into a string variable
                                    var tags = tagsArr.join(', ');
                                }
                                
                            //create an imgCont string variable which will hold all the link location, title, author link, and author name into a text string
                            var imgCont = '<div class="main-Holder"><div class="bgOverLay"></div><div class="forceFix"><div class="image-container" style="background: url(' + photoURL + '); background-repeat:no-repeat; "></div></div><div class="image-info"><p class="top"><a class="title" href="http://www.flickr.com/photos/' + data.photo.owner.nsid + '/' + photoID + '" target="_blank">' + data.photo.title._content + '</a> <span class="author"></br /><span class="author" >by   </span><a class="author" href="http://flickr.com/photos/' + data.photo.owner.nsid + '" target="_blank">' + data.photo.owner.username + '</a></span></p></div>';
                            
                            //if there are tags associated with the image
                            if (typeof(tags) != 'undefined') {
                            
                                //combine the tags with an html snippet and add them to the end of the 'imgCont' variable
                                imgCont += '<p><span class="infoTitle">Tags:</span> ' + tags + '</p>';
                            }
                            
                            //if the image has geo location information associate with it
                            if(typeof(pLocation) != 'undefined'){
                            
                                //combine the geo location data into an html snippet and at that to the end fo the 'imgCont' variable
                                imgCont += '<p><span class="infoTitle">Location:</span> ' + pLocation + '</p>';
                            }
                            
                            
                            //append the 'imgCont' variable to the document
                            $(imgCont).appendTo('#image-container');
                            
                            //delete the pLocation global variable so that it does not repeat
                            delete pLocation;
                        });
                        
                  });
                });
				
                //assign hover actions to each image
                $('.image-container').live('mouseover', function(){
                    $(this).children('div').attr('class');
                });

                $('.image-container').live('mouseout', function(){
                    $(this).children('div').attr('class', 'image-info');
                });
                
				$('.year').click(function(e){
					e.preventDefault();
						jQuery('<img />').attr('id', 'loader').attr('src', 'http://cdn.kylerush.org/kr/images/flickr-ajax-loader.gif').appendTo('#image-container');
					
					//assign your api key equal to a variable
					var apiKey = 'acc85882825985de724f2e0842977f3a';
					var id = $(this).attr('data-photoId');
					//the initial json request to flickr
					//to get your latest public photos, use this request: http://api.flickr.com/services/rest/?&method=flickr.people.getPublicPhotos&api_key=' + apiKey + '&user_id=29096781@N02&per_page=15&page=2&format=json&jsoncallback=?
					$.getJSON('http://api.flickr.com/services/rest/?&method=flickr.photosets.getPhotos&api_key=' + apiKey + '&photoset_id='+id+'&format=json&jsoncallback=?',
					function(data){
						
						//loop through the results with the following function
						$.each(data.photoset.photo, function(i,item){
						
							//build the url of the photo in order to link to it
							var photoURL = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_m.jpg';
							
							//turn the photo id into a variable
							var photoID = item.id;
							
								//use another ajax request to get the geo location data for the image
								$.getJSON('http://api.flickr.com/services/rest/?&method=flickr.photos.geo.getLocation&api_key=' + apiKey + '&photo_id=' + photoID + '&format=json&jsoncallback=?',
								function(data){
									
									//if the image has a location, build an html snippet containing the data
									if(data.stat != 'fail') {
										pLocation = '<a target="_blank" href="http://www.flickr.com/map?fLat=' + data.photo.location.latitude + '&fLon=' + data.photo.location.longitude + '&zl=1">' + data.photo.location.locality._content + ', ' + data.photo.location.region._content + ' (Click for Map)</a>';
									}
								});
								
								//use another ajax request to get the tags of the image
								$.getJSON('http://api.flickr.com/services/rest/?&method=flickr.photos.getInfo&api_key=' + apiKey + '&photo_id=' + photoID + '&format=json&jsoncallback=?',
								function(data){
									
									//if the image has tags
									if(data.photo.tags.tag != '') {
										
										//create an empty array to contain all the tags
										var tagsArr = new Array();
										
										//for each tag, run this function
										$.each(data.photo.tags.tag, function(j, item){
										
											//push each tag into the empty 'tagsArr' created above
											tagsArr.push('<a href="http://www.flickr.com/photos/tags/' + item._content + '" target="_blank">' + item.raw + '</a>');
											
										});
										
										//turn the tags array into a string variable
										var tags = tagsArr.join(', ');
									}
									
								//create an imgCont string variable which will hold all the link location, title, author link, and author name into a text string
								var imgCont = '<div class="main-Holder"><div class="bgOverLay"></div><div class="forceFix"><div class="image-container" style="background: url(' + photoURL + '); background-repeat:no-repeat; "></div></div><div class="image-info"><p class="top"><a class="title" href="http://www.flickr.com/photos/' + data.photo.owner.nsid + '/' + photoID + '" target="_blank">' + data.photo.title._content + '</a> <span class="author"></br /><span class="author" >by   </span><a class="author" href="http://flickr.com/photos/' + data.photo.owner.nsid + '" target="_blank">' + data.photo.owner.username + '</a></span></p></div>';
								
								//if there are tags associated with the image
								if (typeof(tags) != 'undefined') {
								
									//combine the tags with an html snippet and add them to the end of the 'imgCont' variable
									imgCont += '<p><span class="infoTitle">Tags:</span> ' + tags + '</p>';
								}
								
								//if the image has geo location information associate with it
								if(typeof(pLocation) != 'undefined'){
								
									//combine the geo location data into an html snippet and at that to the end fo the 'imgCont' variable
									imgCont += '<p><span class="infoTitle">Location:</span> ' + pLocation + '</p>';
								}
								
								
								//append the 'imgCont' variable to the document
								$(imgCont).appendTo('#image-container');
								
								//delete the pLocation global variable so that it does not repeat
								delete pLocation;
							});
							
					  });
					});
					
					//assign hover actions to each image
					$('.image-container').live('mouseover', function(){
						$(this).children('div').attr('class');
					});
	
					$('.image-container').live('mouseout', function(){
						$(this).children('div').attr('class', 'image-info');
					});
				});
				
                jQuery('#loader').remove();
                
			});
		</script> <style type="text/css">
            body, html {background: #fff; font-size: 12px;  margin-left: 10px; 	font-family: 'Source Sans Pro', sans-serif; color:#222;}
            .main-Holder{ position:relative; float:left; width:313px; height:255px; background-image:url(../images/photoBg.png); margin: 25px 25px 0 0;}
            .bgOverLay{ position: absolute; top:0; left:0; z-index:100; height:72px; width:313px; background:url(../images/photosHeadBg.png);}
			h1 {font-size: 38px; line-height: 45px;}
            h1 span {font-size: 16px; color: #ff0084;}
            h1 a:hover span {color: #fff;}
            #tut-info {width: 810px; margin: 0 0 20px 0;}
            #tut-info a {float: left; display: block; background: #fff; font-size: 20px; padding: 20px 20px; font-weight: bold; margin: 0 15px 0 0;}
            #tut-info a:hover {background: #ff0084;}            
            #loader {margin: 20px 0 40px 350px;}
			.image-container {z-index:1; height: 160px; width: 240px; position: relative; float: left; margin: 0;	 overflow: hidden; text-align:center;}
            .image-info { float:left; width:100%; height:110px; background:url(../images/photoTextBg.png) no-repeat; padding:10px 0  0  5px; }
            .image-info-active {height: 180px; width: 240px; background: rgba(255,255,255,.85);}
            .bottom {padding: 5px;}
            .bottom p {margin: 0 0 5px 0; }
            p.top {width: 240px; padding: 0 0 5px 0; margin: 0;}
            span.author {font-size: 10px;}
            .infoTitle {font-weight: bold; text-trasnform: uppercase;}
            .clearfix:after { content:"."; display:block; height:0; clear:both; visibility:hidden; }
            .clearfix {display:inline-block;}
            .clearfix {display:block;}
			.forceFix{ margin:23px 0 0 14px;}
			a.title{ color:#0096d5; font-size:14px; font-family: 'Source Sans Pro', sans-serif; text-decoration:none;}
			a.title:hover{ color:#0096d5; font-size:14px; font-family: 'Source Sans Pro', sans-serif; text-decoration:underline;}
			a.author{ color:#666; font-size:12px; font-family: 'Source Sans Pro', sans-serif; text-decoration:none;}
			a.author:hover{ color:#666; font-size:12px; font-family: 'Source Sans Pro', sans-serif; text-decoration:underline;}
			author{ color:#666; font-size:12px; font-family: 'Source Sans Pro', sans-serif; text-decoration:none;}
		</style> </head> <body> 
        <div id="image-container">  
      	</div>
         </body>
        
         </html>