<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $page_title;?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
        <script src="/js/jquery.js"></script>
        <script>
            
            $(document).ready(function()
            { 
                $( ".changelog li" ).each( 
                function ()
                {
                    var t = $(this).html();
                    t = t.replace("Removed:","<font color='red'>Removed:</font>");
                    t = t.replace("Added:","<font color='#228B22'>Added:</font>");
                    t = t.replace("Fixed:","<font color='#228B22'>Fixed:</font>");
                    t = t.replace("Changed:","<font color='#FF8C00'>Changed:</font>");
                    $(this).html(t);
                });
                    
            }); 
        </script>
	</head>
	<body>
        <div id ="header">
            <div class="wrap">
                <h1>Built Broken Studios</h1>
                <p>Build It - Break It - Reanimate It</p>                
            </div>
        </div>		
        <div id="main">
        <div id="content">
        <!-- Page content follows -->