//Cant XMLHTTPRq locally and we're switching to mysql later so im not learning FileReader to save time.
var json = '[  {    "title": "News Article 1",    "author": "quantomworks",    "date": "10/10/1992",    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quam nunc, rhoncus eu dolor sed, maximus pharetra ligula. Mauris ultricies, felis vitae blandit tristique, ligula libero feugiat elit, et consequat velit felis quis nisi. Donec vel sagittis leo, at volutpat leo. Integer et magna vitae risus elementum tempus facilisis eget nulla. Ut finibus lacus eu elit malesuada, in porta leo ultrices. Sed lectus urna, lobortis ut vestibulum sit amet, malesuada non purus. In scelerisque porta orci, vitae porta lacus. <p> Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed laoreet porta ultricies. Nullam ac laoreet lorem, quis tristique quam. Quisque fermentum turpis lacus, et viverra nisi porttitor sed. Fusce sed nibh vitae diam feugiat maximus. Sed finibus, eros nec malesuada faucibus, neque nibh consequat ligula, sed viverra eros risus at ipsum. Pellentesque condimentum enim vitae accumsan ultricies. In faucibus mi est, a aliquam diam scelerisque sit amet. Etiam dignissim urna nec enim euismod, eu commodo magna posuere. Sed ac pretium neque, sit amet condimentum urna. Vivamus mollis viverra nisi in dignissim. Curabitur porta nunc eget feugiat scelerisque. Suspendisse a scelerisque augue. Sed consectetur interdum turpis, sit amet elementum ligula tristique id."  },  {    "title": "News Article 2",    "author": "quantomworks",    "date": "08/14/2016",    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet pulvinar nisl, sed elementum velit porta eget. Pellentesque congue diam diam, vestibulum viverra orci vehicula eget. Integer consectetur lacus sapien, ut efficitur felis auctor nec. Proin fringilla justo ultricies, fermentum erat id, feugiat nisl. Vivamus elementum fringilla mauris, at rutrum justo pellentesque nec. Nullam purus nisi, maximus sit amet leo ac, euismod lobortis felis. Pellentesque mattis luctus risus, sed dignissim nisl euismod in. Donec mollis ornare velit. Mauris sagittis lectus in libero iaculis, vitae fermentum lorem tincidunt. <p> Phasellus id vulputate erat. Sed semper hendrerit interdum. Sed sed aliquam est, a viverra nisl. Donec lacus odio, semper posuere est a, consectetur dignissim nunc. Pellentesque ac laoreet lorem. Nunc at aliquet odio, non facilisis risus. Vestibulum lacinia metus tellus, a pellentesque nibh luctus vitae. Sed euismod sem pellentesque suscipit semper. Aenean sed mi non urna rutrum rutrum. Vestibulum ornare nulla diam, id pretium ex sagittis eu. Duis fringilla est ut purus gravida aliquam. Sed orci diam, fermentum vel lorem eget, dapibus mollis neque. Etiam ullamcorper erat eu sollicitudin tempor. Morbi id viverra lectus. Maecenas dictum ante non dui volutpat malesuada. <p> Donec purus eros, dignissim et elit ut, sollicitudin euismod mauris. Morbi sed molestie ante, id viverra justo. Cras diam ante, vestibulum consequat auctor at, tincidunt a sem. Aliquam posuere et est blandit egestas. Nullam fringilla, purus ut rutrum scelerisque, massa sem volutpat massa, luctus fermentum metus urna vitae augue. Phasellus molestie gravida dictum. Phasellus quis ligula et dui porttitor suscipit quis quis massa. Vivamus non sapien urna. Pellentesque ultrices lorem in dolor pellentesque, eu pharetra orci consectetur. Fusce accumsan neque porttitor sollicitudin dapibus. Ut et urna interdum, venenatis erat non, molestie mi. Mauris ornare pellentesque tincidunt. Duis eu aliquam massa. Morbi pellentesque ac ligula sit amet elementum. Duis et porttitor turpis. <p> Etiam vitae nunc sed ligula laoreet facilisis. Morbi ultrices neque vel blandit aliquet. Curabitur volutpat accumsan nisl at scelerisque. Duis sed quam justo. Curabitur eget ultricies lacus, ac pretium nisl. Donec consequat mauris et cursus fringilla. Integer tincidunt lorem id ipsum mollis sodales vel ut purus. Duis euismod sapien semper mollis auctor. Aenean vitae sagittis lacus."  }]'
var news = JSON.parse(json);

for (var i=0; i < news.length; i++)
{
	var str = news[i].title;
	titleHash = str.replace(/\s+/g, '');
	document.getElementById("reportList").innerHTML += '<a onClick="onNewsClick(' + i + ')" href="#' + titleHash + '" class="reportButton">' + news[i].title + '<br>by ' + news[i].author + '<br>' + news[i].date + '</a>';
}

function onNewsClick(aN) //Article Number
{
	document.getElementById("reportTitle").innerHTML = news[aN].title;
	document.getElementById("reportContent").innerHTML = news[aN].content;
	/*
	if(news[aN].content.length > 100)
	{
		document.getElementById("reportContent").style.overflowy = "scroll";
	}
	else
	{
		document.getElementById("reportContent").style.overflowy = "hidden";
	}*/
}

//Load latest article by default.
document.getElementById("reportTitle").innerHTML = news[0].title;
document.getElementById("reportContent").innerHTML = news[0].content;
