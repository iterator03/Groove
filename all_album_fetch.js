$(document).ready(function() {  
    $.getJSON("http://ws.audioscrobbler.com/2.0/?method=user.gettopalbums&user=rj&api_key=4a9f5581a9cdf20a699f540ac52a95c9&limit=80&format=json&callback=?", function(json) {  
        var html = '';
        var	str='';	
		var sln = 0;
	
        $.each(json.topalbums.album, function(i, item) {  
            //html += "<p><a href=" + item.url + " target='_blank'>" + item.name  + "<img src="+JSON.stringify(item.image[0])+">"+"</a></p>";  
			str=JSON.stringify(item.image[2])
			var sln = str.length;
			str=str.slice(10,sln-17);
			var a=item.artist;
			html +="<div class='col-md-2' style='margin-top:20px'><a href='album.php?album="+item.name+"&artist="+a.name+"' target='_blank'><img src="+str +"></a><br><a href='album.php?album="+item.name+"&artist="+a.name+"'>"+item.name+"</a></div>"	
        });  
        $('#all_alb').append(html);  
    });  
})