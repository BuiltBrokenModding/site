<!DOCTYPE html>
<?php
    if(!isset($menu))
    { 
        $menu = array(              
              'back'  => array('text'=>'Back',  'url'=>'#back')
            );  
    }        
?>
<html lang="en">
	<head>
		<title><?php echo $page_title;?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/wiki.css">
        <link rel="shortcut icon" href="/img/icon.ico">
        <script src="/js/jquery.js"></script>
        <script src="/js/progressbar.js"></script>
        <script src="/js/functions.js"></script>
        <script src="/js/image_slider.js"></script>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/CNavigation.php"); ?>
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
        <div id="title">
            <?php
                if(isset($title))
                { 
                    echo "<h1 style='text-align:center; font-size: 450%;'>" . $title . "</h1>";
                    if(isset($sub_title))
                    {
                        echo "<h5 style='text-align:center;  padding:0 1em;'>" . $sub_title . "</h5>" ; 
                    }
                }  
            ?>             
        </div>
        <div id="menu">
            <hr>
            <?php echo CNavigation::ListMenu($menu)  ?>
            <hr>
        </div>
        <!-- Page content follows --> 