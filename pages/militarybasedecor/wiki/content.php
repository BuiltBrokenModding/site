<div id="militarybasedecorcontent" class="contentmenupane">
<?php 
    $web_root = "/pages/militarybasedecor/wiki/content/";
    $modules = array(
                'vanilla' => array('text'=>'Vanilla',  'url'=> $web_root . 'modules/vanilla.php'),
                'civilwar' => array('text'=>'Civil War',  'url'=> $web_root . 'modules/civilwar.php'),
                'worldwarone' => array('text'=>'WW1',  'url'=> $web_root . 'modules/wwone.php'),
                'worldwartwo' => array('text'=>'WW2',  'url'=> $web_root . 'modules/wwtwo.php'),
                'coldwar' => array('text'=>'Cold War',  'url'=> $web_root . 'modules/coldwar.php')                 
            );
    $blocks = array(
                'concrete' => array('text'=>'Concrete',  'url'=> $web_root . 'blocks/concrete.php'),
                'concretestairs' => array('text'=>'Concrete Stairs',  'url'=> $web_root . 'blocks/concretestairs.php')                 
            );        
?>
    <table class="navbox">
        <tbody>
            <tr><th class="navbox-top" colspan="2">               
                <span class="navbox-title"><strong>Content</strong></span>
            </th></tr>
            <tr><th>Modules</th><td><?php echo CNavigation::ContentMenu($modules); ?></td></tr>
            <tr><th>Blocks</th><td><?php echo CNavigation::ContentMenu($blocks); ?></td></tr>
        </tbody>
    </table>
</div>