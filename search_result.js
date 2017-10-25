
  
$(document).ready(function() { 
    var x="<?php $name=$_GET['y'];echo $name; ?>"; 
	var y="http://ws.audioscrobbler.com/2.0/?method=track.search&track="+x+"&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=10&format=json&callback=?";
	console.log(y);
    $.getJSON(y, function(json) {  
        var html = '';
        var	str='';	
		var sln = 0;
		//html +=json;
		  
        $.each(json.results.trackmatches.track, function(i, item) {  
            //html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
			
			html += "<a href="+item.url+">"+item.name+"</a><hr>"; 
        });  
		
        $('#display').append(html);  
    });  
}); 	
	