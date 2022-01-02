(function($) {
	
$(function(){
changePhotos('72157643593418984');

	$('.year').click(function(e){
		$('.year').removeClass('active');
		$(this).addClass('active');
		var id = $(this).attr('data-photoId');
		changePhotos(id);
		e.preventDefault();   
	});			
});

	function changePhotos(id){
	$('#image-container').html('');
			jQuery('<img />').attr('id', 'loader').attr('src', 'http://www.gumpaway.com/images/animated-Pre-loaderfin.gif').appendTo('#image-container');
		
		//assign your api key equal to a variable
		var apiKey = 'acc85882825985de724f2e0842977f3a';
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
					$('#loader').remove();
					
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

}
	
	
}) (jQuery);	