<div>
<?php 
    $web_root = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/content/";
    $missiles = array(
                'missile' => array('text'=>'Missiles',  'url'=> $web_root . 'missiles/missiles.php'),
                'rocket' => array('text'=>'Rocket',  'url'=> $web_root . 'missiles/rocket.php'),
                'small' => array('text'=>'Hawk',  'url'=> $web_root . 'missiles/small.php'),
                'standard' => array('text'=>'Cruise',  'url'=> $web_root . 'missiles/standard.php'),
                'medium' => array('text'=>'Scud',  'url'=> $web_root . 'missiles/medium.php'),
                'large' => array('text'=>'ICBM',  'url'=> $web_root . 'missiles/large.php')                 
            );
    $machines = array(
                'machine' => array('text'=>'Machines',  'url'=> $web_root . 'missiles/machines.php'),
                'sl' => array('text'=>'Launcher',  'url'=> $web_root . 'missiles/small.php')              
            );
            
    echo CNavigation::ContentMenu($missiles);
    echo CNavigation::ContentMenu($machines);

?>
</div>