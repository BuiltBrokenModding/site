<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Built Broken Studios</title>
	<link rel="stylesheet" type="text/css" href="css/basicStyles.css">
	<link rel="stylesheet" type="text/css" href="css/customStyles.css">
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<meta name="keywords" content="Minecraft,Mods,ICBM,Addicted To Red,VoltZ Engine,AI Improvements,Assembly Line,Armory,Artillects,Tinker Toys,Military Base Decor,Mod Packs">
	<meta name="author" content="Built Broken Studios">
	<meta name="description" content="Minecraft mods and custom projects from a team of unique developers.">
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>

<body>
	<div class="contentArea" style="
	width:100%;
	height: 64px;
	margin: 0;
	position:absolute;
	overflow:visible;
	top:0px;
	left:0px;
	color:white;
	letter-spacing:2px;
	border-bottom: 1px solid black;
	">
		<img src="img/logo_64.png" alt="Built Broken Studios" class="inlineContent" style="	
		margin:0;
		padding:0;
		background-color:transparent;
		">
		<p class="inlineContent" style="
		position: absolute;
		top:0;
		left: 64;
		background-color:transparent;
		">
			Built Broken Studios
			<br>
			Build it | Break it | Reanimate it 
		</p>
	</div>
	<div class="mainContent" style="top:60px; text-align:center;">
		<nav class="inlineContent" style="margin:0; padding:0;">
        	
			<a href="index.php" class="inlineContent ContentButton">Home</a><a href="/projects.php" class="inlineContent ContentButton">Projects</a><a href="/addons.html" class="inlineContent ContentButton">Addons</a>
		</nav>
		
			<!-- Javascript photo banner -->
		<div class="contentArea" style="height: 254px; position: relative; width:1000px; overflow:visible; border-bottom: 1px solid black;" id="photoBanner">
			<img id="photoBannerImage" src="">
			<div style="
			position: absolute;
			bottom: 8px;
			left: 16px;
			font-size: 18px;
			color:white;
			" id="photoText">Bottom Left</div>
		</div>
		
		<!-- News -->
		<div class="contentArea" style="
		width: 1030px;
		font-family:'Verdana', 'Arial', sans-serif;
		background:transparent;">
			
			<div class="inlineContent" id="reportList" style="
			width: 200px;
			height: 500px;
			margin:15px;
			padding:0;
			overflow-y: scroll; /* TODO: Add when content exceeds certain static length. If content will be scalable in the future, alter based on number of objects using javascript */
			overflow-x: hidden;
			background:transparent;
			float:left;
			">
			</div>
			<div class="contentArea" style="
			display:inline-block;
			float:left;
			margin:15px;
			padding:0;
			width:740px;
			height:500px;
			font-size:12px;
			">
				<h1 style="
				background-color: rgba(166, 206, 222, 0.3);
				display:block;
				margin:20px;				
				" id="reportTitle">Report Title</h1>
				<section class="inlineContent" id="reportContent"
				style="
				display:block;
				overflow-y: auto;
				overflow-x: auto;
				margin:20px;
				padding:0;
				height: 400px;
				background:transparent;
				">
				</section>
			</div>
		</div>
	
	<br>
	<footer class="contentArea" style="width:990px; padding-left:10px; word-spacing:20px;">
		©2017 BuiltBrokenStudios <a href="about.html" class="inlineContent infoButton">About</a> <a href="contact.html" class="inlineContent infoButton">Contact</a>
	</footer>
	
	</div>
	
	<!-- All external scripts -->
	<script type="text/javascript" src="js/banner.js"></script> 
	<script type="text/javascript">
		
	//Since the elements are already handled using javascript and json, I pull it from a database, format it and store it in a var for processing.
	var json = <?php
		$servername = "localhost"; //Currently pulls from my webserver. Pass sql credentials or write a php file that I can include that wont show on github.
		$username = "webreader";
		$password = "default";
		$dbname = "bbs";
		
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		$rows = array();
		
		$sql = "SELECT title, author, date, content FROM News";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$rows[] = $row;
			}
		} else {
			echo "0 results";
		}
		$conn->close();
		
		print json_encode($rows);
		
		?>;
	var news = JSON.stringify(json);
	news = JSON.parse(news);

	for (var i=0; i < news.length; i++)
	{
		var str = news[i].title;
		var titleHash = str.replace(/\s+/g, '');
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

		
	</script> 
	<script type="text/javascript" src="js/indexBannerData.js"></script> 
	<script type="text/javascript">
	bannerInit("img/banner/",
	document.getElementById("photoBannerImage"),
	document.getElementById("photoText"),
	indexDataArray,
	7000);
	
	</script>
</body>

</html>
