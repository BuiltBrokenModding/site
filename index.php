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
            <div> 
            <h3>New and Updated Packs</h3>
            <h4>Date: Mar 23, 2016</h4>
            <br>
			<p>First off, we have some exciting news: We have released a new pack, Fallen Kingdom, on Curse. Geared around building kingdoms and engaging in NPC interaction. This pack will eventually feature the long awaited Artilects mod. Which is cored around giving NPCs life beyond automated tools.</p>
            <img src="\img\news\fallenkingdom1.png" alt="" align="absmiddle" style="max-width:100%; height:auto;"/>
            <br>
            <img src="\img\news\fallenkingdom2.png" alt="" align="absmiddle" style="max-width:100%; height:auto;"/>
            <br>
            <br>
            <p>As always we will be continuing our work on Volts, Ohms, and Amps. We hope to get these packs released as soon as possible. However, we are still waiting on key missing pieces before completion.</p>
			<p>Per usual, we will be releasing new unstable versions for all of our active projects. This way testing can be done before a stable release. Which is currently planned for the end of the month; Unless any major issues are presented within the project.</p>
            <a href="http://builtbroken.com/">Built Broken Website</a><br>
            <a href="https://twitter.com/BuiltBrokenMod">BBM Twitter</a><br>
            <a href="http://minecraft.curseforge.com/members/DarkCow/projects">BBM Curseforge</a><br>
            <a href="https://github.com/BuiltBrokenModding">BBM Github</a><br>
            <a href="https://player.me/builtbrokenmodding">BBM Player.me</a><br><br>
			<b>By: BBM Team</b></p>
            <hr>
            </div>
            
            <div> 
            <h3>ICBM Update and Ads</h3>
            <h4>Date: Mar 17, 2016 </h4>
            <br>
			<p>Sometime this week we will be pushing an update for ICBM. This update will include Missile Health, AMS, and a Friend or Foe system. So get ready for that!</p>
			<p>Within the coming weeks the Built Broken website (builtbroken.com or builtbroken.net) will be switching Advertisement Providers. We will be moving from adf.ly to adfoc.us. We are moving providers because of monetary issues, our current provider isn’t making enough money to continue to support our services for the long run. We hope that this change will improve the situation so we can continue to provide all of our current services and hopefully add more. This change in Ad Providers will not affect any of our users in any way, this is just an update for you on our backend environment to continue our idea of transparency!</p>
            <img src="\img\news\adfly-marchThisYearVsLast.png" alt="" align="absmiddle" style="max-width:100%; height:auto;"/>
            <br>
            <br>
            <p>We will also be adding just a few more ads around the site to improve monetary income. These ads will not get in anyone’s way, this is simply an addition to our side and banner ads.</p>
			<p>Thanks everyone for your amazing support of Built Broken and Built Broken Modding!</p>
			<b>By: Green_Cafe</b></p>
            <hr>
        	</div>
            
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
				
