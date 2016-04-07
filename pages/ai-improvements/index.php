<?php 
    $page_title="AI-Improvements Home";
    $title ="AI-Improvements ";
    $menu = array(
              'home'  => array('text'=>'Home',  'url'=>'/'),
              'back'    => array('text'=>'Back',  'url'=>'#back'),   
              #'archive'   => array('text'=>'Archive',  'url'=>'archive.php'),
              #'mc1.7'   => array('text'=>'MC1.7',  'url'=>'1.7/'),
              'modpacks'   => array('text'=>'Modpacks',  'url'=>'../modpack.php'),
              'curse'   => array('text'=>'Curse',  'url'=>'http://minecraft.curseforge.com/projects/ai-improvements'),
              'code'    => array('text'=>'Src',  'url'=>'https://github.com/BuiltBrokenModding/AI-Improvements'),
			  #'wiki' => array('text'=>'Wiki', 'url'=>'wiki/')
            );
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
   
?>
    <p>TODO Add some content</p>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>