<?php 
    $page_title="AL Support";
    $title = "Support";
    $sub_title ="for Assembly Line"; 
    $menu = array(
              'back'  => array('text'=>'Back',  'url'=>'#back'),
              'code'  => array('text'=>'Github',  'url'=>'https://github.com/orgs/BuiltBrokenModding/dashboard')
    ); 
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
    
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/support.mod.php"); ?>
</br>   
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
