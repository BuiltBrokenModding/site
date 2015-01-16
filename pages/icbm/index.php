<?php 
    $page_title="ICBM Home";
    $title ="ICBM";
    $sub_title = "Minecraft Missile Mod";
    $menu = array(
              'back'    => array('text'=>'Back',  'url'=>'#back'),   
              'mc1.6'   => array('text'=>'MC1.6',  'url'=>'1.6/'),
              'mc1.7'   => array('text'=>'MC1.7',  'url'=>'1.7/'),
              'modpacks'   => array('text'=>'Modpacks',  'url'=>'modpack.php'),
              'curse'   => array('text'=>'Curse',  'url'=>'http://minecraft.curseforge.com/mc-mods/225502-icbm'),
              'credits' => array('text'=>'Credits',  'url'=>'credit.php'), 
              'code'    => array('text'=>'Src',  'url'=>'https://github.com/BuiltBrokenModding/ICBM')                          
            );
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
   
?>    
    </br>
    <h2>About</h2>
    <p>ICBM doesn't need much explanation of what it is or isn't. After all ICBMs are super sizes missiles that blow everything up. Making this mod just about destroying the world right? I would say no but its a mixed story when it comes to ICBM. At the beginning it was created with the idea that PvP needed a modern twist. Less swords, guns, traps, and more bang for your resources. Since then it has evolved to support those PvE players, and creative players. Adding in cargo, weather, and transportation missiles.  </p>
    </br>
    <h2>Videos</h2>
    <div class="row">
            <div style="width:50%;">
            <iframe width="420" height="315" class="center" src="//www.youtube.com/embed/p6pi8H7I1E4" frameborder="0" allowfullscreen></iframe>
            </div>
            <div style="width:50%;">
            <iframe width="420" height="315" class="center" src="//www.youtube.com/embed/9LDxvUBj1HM" frameborder="0" allowfullscreen></iframe>
        </div>
    </br>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
