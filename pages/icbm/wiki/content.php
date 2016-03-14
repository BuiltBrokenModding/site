<div id="icbmcontent" class="contentmenupane">
<?php 
    $web_root = "/pages/icbm/wiki/content/";
    $missiles = array(
                'rocket' => array('text'=>'Micro',  'url'=> $web_root . 'missiles/micro.php'),
                'small' => array('text'=>'Small',  'url'=> $web_root . 'missiles/small.php'),
                'standard' => array('text'=>'Standard',  'url'=> $web_root . 'missiles/standard.php'),
                'medium' => array('text'=>'Medium',  'url'=> $web_root . 'missiles/medium.php'),
                'large' => array('text'=>'Large',  'url'=> $web_root . 'missiles/large.php')                 
            );
    $machines = array(                
                'silo' => array('text'=>'Silo',  'url'=> $web_root . 'machines/silo.php'),
                'plauncher' => array('text'=>'Launcher(Portable)',  'url'=> $web_root . 'machines/portable_launcher.php'),
                'launcher' => array('text'=>'Launcher',  'url'=> $web_root . 'machines/launcher.php'),
                'workstation' => array('text'=>'Workstation',  'url'=> $web_root . 'machines/workstation.php'),
                'warheadtable' => array('text'=>'Warhead Table',  'url'=> $web_root . 'machines/warheadtable.php'),
                'controller' => array('text'=>'Controller',  'url'=> $web_root . 'machines/controller.php'),
				'fof' => array('text'=>'FoF Station',  'url'=> $web_root . 'machines/fofstation.php'),
				'ams' => array('text'=>'AMS Turret',  'url'=> $web_root . 'machines/ams.php')				
            );
    $tools = array(
                'rlauncher' => array('text'=>'Rocket Launcher',  'url'=> $web_root . 'tools/rocketlauncher.php'),
                'datachip' => array('text'=>'Data Chip',  'url'=> $web_root . 'tools/datachip.php'),
                'gpschip' => array('text'=>'GPS Data Chip',  'url'=> $web_root . 'tools/gpsdatachip.php')
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
    $crafting = array(
                'pstick' => array('text'=>'Powder Stick',  'url'=> $web_root . 'parts/powderstick.php'),
                'pcharge' => array('text'=>'Gunpowder Charge',  'url'=> $web_root . 'parts/gunpowdercharge.php')
            );
            
?>
    <table class="navbox">
        <tbody>
            <tr><th class="navbox-top" colspan="2">               
                <span class="navbox-title"><strong>Content</strong></span>
            </th></tr>
            <tr><th>Missiles</th><td><?php echo CNavigation::ContentMenu($missiles); ?></td></tr>
            <tr><th>Machines</th><td><?php echo CNavigation::ContentMenu($machines); ?></td></tr>
            <tr><th>Tools</th><td><?php echo CNavigation::ContentMenu($tools); ?></td></tr>
            <tr><th>Explosives</th><td><?php echo CNavigation::ContentMenu($explosives); ?></td></tr>
            <tr><th>Parts</th><td><?php echo CNavigation::ContentMenu($crafting); ?></td></tr>
        </tbody>
    </table>
</div>