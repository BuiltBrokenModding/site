<?php 
    $page_title="Home";
    $menu = array(
      'github'  => array('text'=>'Github',  'url'=>'https://github.com/BuiltBrokenModding'),
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
            <h3>Progress Update</h3>
            <h4> Date: March 28, 2015 </h4>
            <p>So its been a while since I've post anything to the front new page. I would say I'm just lazy but its really just been a lack of progress. Luckily today some progress has been made on ICBM.</p>
            <p>http://i577.photobucket.com/albums/ss215/bobstrong/SmallSilo-March28-2015_zpsrpisag1g.png</p>
            <p> I introduce the missile silo. As some of you may have heard this will be a replacement for the old launchers. Yes, the old launchers are not being brought back. This was a decisions I made to allow better creativity when building bases. The old launchers held the player down to a fixed layout due to the wide shape. This new launcher is only 1 block wide and deep. As well generic so that you can place any block around it. This allows for much more custom builds and more compact setups.</p>
            <p><b>By Darkguardsman</b></p>
            <hr>
        </div>
        <div>
            <h3>Voltz Engine</h3>
            <h4> Date: Jan 13, 2015 </h4>
            <p>So a while back I announce that ICBM and my other mods would get a new core mod. Shortly after announcing this I clone Resonant Engine and beat it into being Voltz Engine. Even though I use the word 'clone' Voltz Engine doesn't resemble Resonant Engine much after our recent updates. We have stripped away a large sum of code that was only used for Resonant Induction and MFFS. Most of the scala code is now converted to java allowing it to be used more openly by other developers. Most of the old issues are now fixed and include Unit tests to detect for future issues. With all this we now have a much stronger and better fitting core for our work. For those wondering about the legal side of things we do have full permission to clone Resonant Engine. For all contributors that added code to Resonant Engine credit will be extended to Voltz Engine.</p>
            <p><b>By Darkguardsman</b></p>
            <hr>
        </div>
        <div>
            <h3>Death of UE Team</h3>
            <h4> Date: Jan 5, 2015 </h4>
            <p>Ok so I finally had my fill of working with Calcalvia. I know it took me 3 years to do something I should have honestly done a while ago. I no longer work as a member UE Team or with Calclavia on any of his projects. With this I believe UE Team will be a memory unless Calcalvia does something about it. To be honest with his lack of interest in a team I see him close sourcing most of his projects. This may include Resonant Engine itself now that it is fully in his ownership. As a user what does this mean for you? Well if you use Calclavia's mods your going to experiences a long gap of service and more bugs. For our mods? Things should get much better once we get our core mod in production. Since I engineered most of the code base of Resonant Engine and with the help of my team a new engine should be easy. Especially with out plan to clone a percentage of Resonant Engine to jump start the process.   </p>
            <p><b>By Darkguardsman</b></p>
            <hr>
        </div>
        <div>
            <h3> Introduction of Micro Missile </h3>
            <h4> Date: Dec, 31 2014 </h4>
            <table>
            <tr>
            <td><img src="/img/news.micro_missile.png" alt="missile model comparison"></td>
            <td><p>Few days ago we released the ICBM missile crafting system allowing for module missiles. With this we now have a new missile model for the micro missile size. This is a big change for the mod as before now all missiles looked about the same. Each missile only had some minor visual changes including different sizes per tier. With the new models each size will have its own custom look. This way you know what is about to kill you before it hits the ground.</p>
            </td></tr>
            </table>
            <hr>
        </div>
        <div>
            <h3> New Site </h3>
            <h4> Date: Dec, 28 2014 </h4>
            <p>We have finally made the transition from wordpress back to old school plain webpages. With this the site is running faster than ever. For you this mean no more delay when loading large pages. This includes the download pages which were having loading times all the way up to 2 mins. Which is now fixed showing most pages loading in under 1 second and at most 5 seconds. </p>
            <hr>
        </div>
    </div>
<script type="text/javascript">   
    
    images = ["http://imageshack.com/a/img540/7162/huRZD7.png",
            "http://imageshack.com/a/img910/9708/uAO6Vu.png",
            "http://imageshack.com/a/img673/5788/JfJN5I.png",
            "http://imageshack.com/a/img912/5715/abZIJK.png",
            "http://imageshack.com/a/img540/332/N8R66r.png",
            "http://imageshack.com/a/img661/3217/mG2p86.png",
            "http://imageshack.com/a/img904/2263/FSa4f8.jpg",
            "http://imageshack.com/a/img661/6038/AW2x3D.png"];  
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
				
