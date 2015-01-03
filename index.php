<?php 
    $page_title="Home";
    $menu = array(
      'github'  => array('text'=>'Github',  'url'=>'https://github.com/BuiltBrokenModding'),
      'project'  => array('text'=>'Projects',  'url'=>'project.php')
    );  
    include("php/top.php");      
?>
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
    <div class="news">
        <div>
            <h3> Introduction of Micro Missile </h3>
            <h4> Date: Dec, 31 2014 </h4>
            <table>
            <tr>
            <td><img src="/img/news.micro_missile.png" alt="missile model comparison"></td>
            <td><p>Few days ago we released the ICBM missile crafting system allowing for module missiles. With this we now have a new missile model for the micro missile size. This is a big change for the mod as before now all missiles looked about the same. Each missile only had some minor visual changes including different sizes per tier. With the new models each size will have its own custom look. This way you know what is about to kill you before it hits the ground.</p>
            </td></tr>
            </table>
        </div>
        <div class="news">
            <h3> New Site </h3>
            <h4> Date: Dec, 28 2014 </h4>
            <p>We have finally made the transition from wordpress back to old school plain webpages. With this the site is running faster than ever. For you this mean no more delay when loading large pages. This includes the download pages which were having loading times all the way up to 2 mins. Which is no fixed showing most pages loading in under 1 second and at most 5 seconds. </p>
        </div>
    </div>
<script type="text/javascript"> 
    startSlideShow(new Slider([ "icbm1.png",  "artillect1.png", "icbm2.png", "artillect2.png", "icbm3.png" ]));
</script>
<?php include("php/bottom.php"); ?>
				
