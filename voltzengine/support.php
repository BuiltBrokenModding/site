<?php 
    $page_title="VE Support";
    $title = "Support";
    $sub_title ="for Voltz Engine"; 
    $menu = array(
              'back'  => array('text'=>'Back',  'url'=>'#back'),
              'code'  => array('text'=>'Github',  'url'=>'https://github.com/BuiltBrokenModding/VoltzEngine/issues?q=')
    ); 
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
    
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/support.mod.php"); ?>
</br>   
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
