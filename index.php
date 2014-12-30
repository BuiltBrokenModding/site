<?php 
    $page_title="Home";
    include("php/top.php");
    
?>
    <ul class="listmenu">
        <li><a href="https://github.com/Universal-Electricity" >UE-Team</a></li>
        <li><a href="https://github.com/BuiltBrokenModding" >Github</a></li>
        <li><a href="project.php" >Projects</a></li>
    </ul>
    <h3>Minecraft Modding</h3>   
    <div id="slideshow" style="width:100%;overflow:hidden; height:480px;">
        <div id="slideshowimage" style="width:100%;overflow:hidden;">
        </div>
    </div>    
    <table style="width:100%;padding:5px;">
      <tr>
        <td><img src="img\200x200.png" alt="Artillects"></td>
        <td><img src="img\200x200.png" alt="Armory"></td> 
        <td><a href="pages\icbm\"><img src="img\ICBM.png" alt="ICBM"></a></td>
      </tr>
       <tr>
        <td><a href="http://resonantengine.com/"><img src="img\RE.png" alt="Resonant Engine"></a></td>
        <td></td> 
        <td></td>
      </tr>
    </table>
<hr>
<script type="text/javascript">
<!-- http://kimmobrunfeldt.github.io/progressbar.js/ -->
    var images = [ 
    "img/200x200.png", 
    "img/ICBM.png",
    "img/200x200.png",
    "img/ICBM.png",
    "img/200x200.png" ]
    var links = [ 
    "#", 
    "#",
    "#",
    "#",
    "#" ]
    var currentimage = 1;
    var line = new ProgressBar.Line('#slideshow', {
        color: '#FCB03C', duration: 10000
    });
    
    function startSlideShow()
    {
        changeimage(1);
        line.set(0);
        line.animate(1);
        setTimeout("startSlideShow()", 10000);        
    }
    
    function changeimage(change)
    {
        currentimage += change;
        if(currentimage > images.length - 1)
        {
            currentimage = 1;
        }
        else if(currentimage < 1)
        {
            currentimage = images.length - 1;
        }
        document.getElementById('slideshowimage').innerHTML = '<a href="' + links[currentimage] + '"><img id="image" src="' + images[currentimage] + '"/></a>';
    }
    changeimage(0);
    startSlideShow();

</script>
<?php include("php/bottom.php"); ?>
				
