<?php 
    $page_title="Home";
    $title="404";
    $sub_title="Page Not Found";
    $menu = array(
              'back'  => array('text'=>'Back',  'url'=>'#back'),
              'home'  => array('text'=>'Home',  'url'=>'/index.php'),
              'projects'  => array('text'=>'Projects',  'url'=>'/project.php')
    );
    include("php/top.php");
    
?>   
    <p> Looks like the page you were looking for does not exist. We recommend you check your spelling and retry. If the link is correct and you reached here from a button then the page has not been created yet. Don't worry about this as the site is still under construction.  </p>
<?php include("php/bottom.php"); ?>
				
