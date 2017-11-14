<?php 
    $page_title="VE Home";
    $title ="Voltz Engine";
    $sub_title = "Minecraft Modding Toolkit";
    $menu = array(
              'back'    => array('text'=>'Back',  'url'=>'#back'),  
              'mc1.7'   => array('text'=>'MC1.7',  'url'=>'1.7/'),
              'code'    => array('text'=>'Src',  'url'=>'https://github.com/BuiltBrokenModding/VoltzEngine')                          
            );
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
   
?>    
    </br>
    <div class="news">
        <div>
        <h2>About</h2>
        <p>Every mod has a core system or library .jar that is forced onto the user so why not do the same with our mods. Well, Volz Engine can be called our core but we like to think of it as something more. Voltz Engine is our dream to make a toolkit for developers, and users to create Minecraft mods. It's not just some manifest of data for our team to use and for you as the user to download. Volz Engine is a content creation system that includes hundreds of useful tool. The engine comes pre-loaded with ores, crafting items, recipe handling, and admin commands. It also includes a full schematic system and XML block generation system. Both allow mod pack creators to add new blocks and world gen as needed.</p>
        <p> For developers on the other hand, the engine contains a massive amount of useful features. First is the content creation system that allows blocks to be generated and registered with one line of code. Next, we have our own tile system replacing the need to have a block class. To end off we have our own solution to energy, fluid, and item transportation. Which includes a node and grid based system to make networks of tiles.</p>
        <div>
    <div>
    
    </br>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
