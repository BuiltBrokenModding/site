<?php 
    $page_title="ICBM Home";
    $title ="ICBM";
    $sub_title = "Minecraft Missile Mod";
    $menu = array(
              'home'  => array('text'=>'Home',  'url'=>'/'),
              'back'    => array('text'=>'Back',  'url'=>'#back'),   
              'archive'   => array('text'=>'Archive',  'url'=>'archive.php'),
              'mc1.7'   => array('text'=>'MC1.7',  'url'=>'1.7/'),
              'modpacks'   => array('text'=>'Modpacks',  'url'=>'../modpack.php'),
              'curse'   => array('text'=>'Curse',  'url'=>'http://minecraft.curseforge.com/mc-mods/225502-icbm'),
              'code'    => array('text'=>'Src',  'url'=>'https://github.com/BuiltBrokenModding/ICBM'),
			  'wiki' => array('text'=>'Wiki', 'url'=>'wiki/')
            );
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
   
?>    
    </br>
    <h2>About</h2>
    <p>ICBM doesn't need much explanation of what it is or isn't. After all ICBM's are super-sized missiles that blow everything up, leaving nothing behind. Wouldn't that make this mod just about destroying the world? No but its a mixed story when it comes to ICBM. At the beginning it was created with the idea that PvP needed a modern twist. Less swords, guns, traps, and more bang for your buck. Since then it has evolved to support those PvE players, and creative players. Adding in cargo, weather, and transportation missiles. Also enabling you to have long ranged combat.</p>
    </br>
    <h2>Videos</h2>
    <p> These videos were created by the community featuring past versions of the mod. </p>
    <div class="row">
        <div style="width:50%;">
            <iframe width="420" height="315" class="center" src="//www.youtube.com/embed/p6pi8H7I1E4" frameborder="0" allowfullscreen></iframe>
        </div>
        <div style="width:50%;">
            <iframe width="420" height="315" class="center" src="//www.youtube.com/embed/9LDxvUBj1HM" frameborder="0" allowfullscreen></iframe>
        </div>
        <hr>
    </div>
    
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
