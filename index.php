<?php 
    $page_title="Home";
    include("php/top.php");
    
?>
    <div>
        <ul class="listmenu">
            <li><a href="https://github.com/Universal-Electricity" >UE-Team</a></li>
            <li><a href="https://github.com/BuiltBrokenModding" >Github</a></li>
            <li><a href="project.php" >Projects</a></li>
        </ul>
    </div>
    <h2>Featured Projects</h2>  
    <div>
        <div id="slideshow">         
            <div id="slideshowimage">
            <a href="/pages/icbm/"><img id="image" src="/img/slider/icbm1.png"/></a><h2><span>ICBM:<span class="spacer"></span><br /><span class="spacer"></span>Minecraft Missile Mod</span></h2>
            </div>
            <div id ="slidebar"></div>
        </div>
    </div>
    <br>
    <br>
    <h2> News </h2>
    <hr>
<script type="text/javascript">
<!-- http://kimmobrunfeldt.github.io/progressbar.js/ -->
    var images = [ 
    "icbm1.png", 
    "artillect1.png",
    "icbm2.png",
    "artillect2.png",
    "icbm3.png" ];
    var currentimage = 0;
    var line = new ProgressBar.Line('#slidebar', {
        color: '#FCB03C', duration: 10000
    });
    var slider = document.getElementById('slideshowimage');
    
    function startSlideShow()
    {
        var newimg = Math.floor(Math.random() * (images.length - 1));
        while(newimg == currentimage)
        {
            newimg = Math.floor(Math.random() * (images.length - 1));
        }
        currentimage = newimg;

        var img_name = images[newimg];
        var link = "#";
        var title = "Title";
        var sub = "Sub";
        if(img_name.indexOf("icbm") > -1)
        {
            link = "/pages/icbm/";
            title = "ICBM";
            sub = "Minecraft Missile Mod";
        }
        else if(img_name.indexOf("artillect") > -1)
        {
            link = "/pages/artillect/";
            title = "Artillects";
            sub = "Minecraft Civ and NPC mod";
        }        
        slider.style.backgroundImage= "url(/img/slider/" + img_name + ")"
        document.getElementById('slideshowimage').innerHTML = '<h2><span>' + title + ':<span class="spacer"></span><br /><span class="spacer"></span>' + sub + '</span></h2>';
        slider.onclick = function() 
        {
            open(link, "_self");
        };
        line.set(0);
        line.animate(1);
        setTimeout("startSlideShow()", 10000);        
    }
    
    startSlideShow();

</script>
<?php include("php/bottom.php"); ?>
				
