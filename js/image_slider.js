
// http://kimmobrunfeldt.github.io/progressbar.js/



function Slider (images) 
{
    this.images = images;    
    this.currentimage = 0;
    this.line = new ProgressBar.Line('#slidebar', {color: '#FCB03C', duration: 10000});    
} 

function startSlideShow(slider)
{
        var link = "#";
        var title = "Title";
        var sub = "Sub";
        
        //Get next random image
        var newimg = Math.floor(Math.random() * (slider.images.length - 1));
        while(newimg == this.currentimage)
        {
            newimg = Math.floor(Math.random() * (slider.images.length - 1));
        }
        slider.currentimage = newimg;

        //Set link, title, and subtitle data
        if(slider.images[newimg].indexOf("icbm") > -1)
        {
            link = "/pages/icbm/";
            title = "ICBM";
            sub = "Minecraft Missile Mod";
        }
        else if(slider.images[newimg].indexOf("artillect") > -1)
        {
            link = "/pages/artillect/";
            title = "Artillects";
            sub = "Minecraft Civ and NPC mod";
        }

        //Build HTML        
        document.getElementById('slideshowimage').style.backgroundImage= "url(/img/slider/" + slider.images[newimg] + ")"
        document.getElementById('slideshowimage').innerHTML = '<h2><span>' + title + ':<span class="spacer"></span><br /><span class="spacer"></span>' + sub + '</span></h2>';
        
        //Make the div clickable like a link
        document.getElementById('slideshowimage').onclick = function() 
        {
            open(link, "_self");
        };
        
        //Update the progress bar
        slider.line.set(0);
        slider.line.animate(1);
        
        //Loop
        setTimeout(function(){ startSlideShow(slider);}, 10000);
    }   

