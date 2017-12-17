<div id="icbmcontent" class="contentmenupane">
<?php 
    $web_root = "/pages/addictiedToRed/wiki/content/";
    $detectors = array(
                'entity' => array('text'=>'Entity',  'url'=> $web_root . 'EntityDetector.php')               
            );
    $emitters = array(
                'chat' => array('text'=>'Chat',  'url'=> $web_root . 'ChatEmitter.php'),
                'audio' => array('text'=>'Audio',  'url'=> $web_root . 'AudioEmitter.php')
            );
            
?>
    <table class="navbox">
        <tbody>
            <tr><th class="navbox-top" colspan="2">               
                <span class="navbox-title"><strong>Content</strong></span>
            </th></tr>
            <tr><th>Detectors</th><td><?php echo CNavigation::ContentMenu($detectors); ?></td></tr>
            <tr><th>Emitters</th><td><?php echo CNavigation::ContentMenu($emitters); ?></td></tr>
        </tbody>
    </table>
</div>