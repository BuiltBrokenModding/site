var newsObject = {};		

var news = JSON.stringify(j2017);		
news = JSON.parse(news);		
newsObject.twentyseventeen = news;		

for (var i=0; i < news.length; i++)		
{		
    var str = news[i].title;		
    var titleHash = str.replace(/\s+/g, '');		
    document.getElementById("twentyseventeenlist").innerHTML += 		
         '<li class="list-group-item"><a onClick="onNewsClick(' + i + ', \'twentyseventeen\')" href="#' + titleHash + '"><h6>' + news[i].title +'</h6><span>' + news[i].date + ' - ' + news[i].author + '</span></a></li>';	
}		

news = JSON.stringify(j2016);		
news = JSON.parse(news);		

newsObject.twentysixteen = news;		

for (var i=0; i < news.length; i++)		
{		
    var str = news[i].title;		
    var titleHash = str.replace(/\s+/g, '');		
    document.getElementById("twentysixteenlist").innerHTML += 		
         '<li class="list-group-item"><a onClick="onNewsClick(' + i + ', \'twentysixteen\' )" href="#' + titleHash + '"><h6>' + news[i].title +'</h6><span>' + news[i].date + ' - ' + news[i].author + '</span></a></li>';
}		

function onNewsClick(aN, year) //Article Number		
{		
    document.getElementById("reportTitle").innerHTML = newsObject[year][aN].title;		
    document.getElementById("reportContent").innerHTML = newsObject[year][aN].content;			
}		
//Load latest article by default.		
document.getElementById("reportTitle").innerHTML = newsObject.twentyseventeen[1].title;		
document.getElementById("reportContent").innerHTML = newsObject.twentyseventeen[1].content;