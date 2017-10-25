$(document).ready(function() {  
    $.getJSON("http://ws.audioscrobbler.com/2.0/?method=chart.gettopartists&user=rj&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=104&format=json&callback=?", function(json) {  
        var html = '';
        var	str='';	
		var sln = 0;
	
        $.each(json.artists.artist, function(i, item) {  
            //html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
			str=JSON.stringify(item.image[2])
			var sln = str.length;
			str=str.slice(10,sln-17);
			
			html +="<div class='col-md-offset-1 col-md-2' style='margin-top:20px'><a href='artist.php?artist="+item.name+"&im="+str+"' target='_blank'><img src="+str +"></a><br><a style='margin:0 auto;' href='artist.php?artist="+item.name+"&im="+str+"'>"+item.name+"</a></div>"	
        });  
        $('#all_art').append(html);  
    });  
})