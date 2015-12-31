<?php 
    $page_title="Home";
    $menu = array(
      'github'  => array('text'=>'Github',  'url'=>'https://github.com/BuiltBrokenModding'),
      'games'  => array('text'=>'Games',  'url'=>'games.php'),
      'minecraft'  => array('text'=>'Minecraft',  'url'=>'minecraft.php'),
      'project'  => array('text'=>'Projects',  'url'=>'project.php'), 
      'about'  => array('text'=>'About',  'url'=>'about.php')
    );  
    include("php/top.php");      
?>
    <h2>Featured Projects</h2>  
    <div>
        <div id="slideshow">         
            <div id="slideshowimage">          
            </div>
            <div id ="slidebar"></div>
        </div>
    </div>
    <br>
    <br>
    <h2> News </h2>
    <hr>
    <div class="news">
        
    </div>
<script type="text/javascript">   
    
    images = ["/img/slider/icbm1.png",
            "/img/slider/icbm2.png",
            "/img/slider/icbm3.png",
            "/img/slider/icbm4.png",
            "/img/slider/artillect1.png",
            "/img/slider/artillect2.png",
            "/img/slider/artillect3.png",
            "/img/slider/artillect4.png"];  
    mod = ["ICBM", "ICBM", "ICBM", "ICBM", "Artillects", "Artillects", "Artillects", "Artillects"];
    currentimage = 0;
    line = new ProgressBar.Line('#slidebar', {color: '#FCB03C', duration: 10000});

    function startSlideShow()
    {
            var link = "#";
            var title = "Title";
            var sub = "Sub";
            
            //Get next random image
            var newimg = Math.floor(Math.random() * (images.length - 1));
            while(newimg == currentimage)
            {
                newimg = Math.floor(Math.random() * (images.length - 1));
            }
            currentimage = newimg;

            //Set link, title, and subtitle data
            if(mod[newimg].indexOf("ICBM") > -1)
            {
                link = "/pages/icbm/";
                title = "ICBM";
                sub = "Minecraft Missile Mod";
            }
            else if(mod[newimg].indexOf("Artillects") > -1)
            {
                link = "/pages/artillect/";
                title = "Artillects";
                sub = "Minecraft Civ and NPC mod";
            }

            //Build HTML        
            document.getElementById('slideshowimage').style.backgroundImage = "url(" + images[newimg] + ")";
            document.getElementById('slideshowimage').innerHTML = '<h2><span>' + title + ':<span class="spacer"></span><br /><span class="spacer"></span>' + sub + '</span></h2>';
            
            //Make the div clickable like a link
            document.getElementById('slideshowimage').onclick = function() 
            {
                open(link, "_self");
            };
            
            //Update the progress bar
            line.set(0);
            line.animate(1);
            
            //Loop
            setTimeout("startSlideShow()", 10000);
    }   
    startSlideShow();
</script>
<?php include("php/bottom.php"); ?>
				
