<div id="icbmcontent" class="contentmenupane">
<?php 
    $web_root = "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/content/";
    $missiles = array(
                'rocket' => array('text'=>'Micro',  'url'=> $web_root . 'missiles/micro.php'),
                'small' => array('text'=>'Small',  'url'=> $web_root . 'missiles/small.php'),
                'standard' => array('text'=>'Classic',  'url'=> $web_root . 'missiles/standard.php'),
                'medium' => array('text'=>'Medium',  'url'=> $web_root . 'missiles/medium.php'),
                'large' => array('text'=>'Large',  'url'=> $web_root . 'missiles/large.php')                 
            );
    $machines = array(
                'launcher' => array('text'=>'Launcher',  'url'=> $web_root . 'missiles/launcher.php'),
                'silo' => array('text'=>'Silo',  'url'=> $web_root . 'missiles/silo.php')                 
            );
            
?>
    <table class="navbox">
        <tbody>
            <tr><th class="navbox-top" colspan="2">               
                <span class="navbox-title"><strong>Content</strong></span>
            </th></tr>
            <tr><th>Missiles</th><td><?php echo CNavigation::ContentMenu($missiles); ?></td></tr>
            <tr><th>Machines</th><td><?php echo CNavigation::ContentMenu($machines); ?></td></tr>
        </tbody>
    </table>
</div>