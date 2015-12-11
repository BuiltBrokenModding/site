<div id="icbmcontent" class="contentmenupane">
<?php 
    $web_root = "/pages/icbm/wiki/content/";
    $missiles = array(
                'rocket' => array('text'=>'Micro',  'url'=> $web_root . 'missiles/micro.php'),
                'small' => array('text'=>'Small',  'url'=> $web_root . 'missiles/small.php'),
                'standard' => array('text'=>'Classic',  'url'=> $web_root . 'missiles/standard.php'),
                'medium' => array('text'=>'Medium',  'url'=> $web_root . 'missiles/medium.php'),
                'large' => array('text'=>'Large',  'url'=> $web_root . 'missiles/large.php')                 
            );
    $machines = array(
                'plauncher' => array('text'=>'Portable Launcher',  'url'=> $web_root . 'machines/portable_launcher.php'),
                'silo' => array('text'=>'Silo',  'url'=> $web_root . 'machines/silo.php')                 
            );
    $explosives = array(
                'antimatter' => array('text'=>'Antimatter',  'url'=> $web_root . 'explosives/antimatter.php'),
                'arrow' => array('text'=>'Arrow',  'url'=> $web_root . 'explosives/arrow.php'),
                'enderblocks' => array('text'=>'Ender Blocks',  'url'=> $web_root . 'explosives/enderblocks.php'),
                'endothermic' => array('text'=>'Endothermic',  'url'=> $web_root . 'explosives/endothermic.php'),
                'exothermic' => array('text'=>'Exothermic',  'url'=> $web_root . 'explosives/exothermic.php'),
                'fireBomb' => array('text'=>'Fire Bomb',  'url'=> $web_root . 'explosives/fire-bomb.php'),
                'flashFire' => array('text'=>'Flash Fire',  'url'=> $web_root . 'explosives/flash-fire.php'),
                'letItSnow' => array('text'=>'Let it Snow',  'url'=> $web_root . 'explosives/let-it-snow.php'),
                'tnt' => array('text'=>'TNT',  'url'=> $web_root . 'explosives/tnt.php'),
                'torch-eater' => array('text'=>'Torch Eater',  'url'=> $web_root . 'explosives/torch-eater.php'),
				'anti-plant-life' => array('text'=>'Anti Plant Life', 'url'=> $web_root . 'explosives/anti-plant-life.php')
            );
            
?>
    <table class="navbox">
        <tbody>
            <tr><th class="navbox-top" colspan="2">               
                <span class="navbox-title"><strong>Content</strong></span>
            </th></tr>
            <tr><th>Missiles</th><td><?php echo CNavigation::ContentMenu($missiles); ?></td></tr>
            <tr><th>Machines</th><td><?php echo CNavigation::ContentMenu($machines); ?></td></tr>
            <tr><th>Explosives</th><td><?php echo CNavigation::ContentMenu($explosives); ?></td></tr>
        </tbody>
    </table>
</div>