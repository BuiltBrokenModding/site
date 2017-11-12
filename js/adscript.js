var darksScript = '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- BBM Large Ad --><ins class="adsbygoogle"     style="display:inline-block;width:300px;height:600px"    data-ad-client="ca-pub-2991607480093590"     data-ad-slot="8788848951"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';

var webmasterSuperAwesomeScript =  '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><!-- BBS Left Right --><ins class="adsbygoogle"     style="display:inline-lock;width:300px;height:600px"     data-ad-client="ca-pub-1939002226434458"     data-ad-slot="2415012292"></ins><script>(adsbygoogle = window.adsbygoogle || []).push({});</script> ';

var chosenScript = "";

var randomAdChosen = Math.floor(Math.random() * 2) + 1;

console.log("Random number = " + randomAdChosen)
if(randomAdChosen === 1)
	{
		chosenScript = darksScript;
	}
else
	{
		chosenScript = webmasterSuperAwesomeScript;
	}

document.getElementById('leftAd').innerHTML = chosenScript;
document.getElementById('rightAd').innerHTML = chosenScript;