<?php 
    $page_title = "ATR MC1.7";
    $title = "Addicted To Red";
    $sub_title ="Red Glowing Power";   
   $menu = array(
              'back'  => array('text'=>'Back',  'url'=>'#back'),
              'downloads'  => array('text'=>'Downloads',  'url'=>'downloads.php'),
              'wiki'  => array('text'=>'Wiki',  'url'=>'../wiki/'),
              'support'  => array('text'=>'Support',  'url'=>'../../support.php')
    ); 
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php"); 
    
?>
     <h2>How to Install</h2>
    <p>Process is about the same as any other mod. So if you understand what your doing you can skip past this list. Just make sure to install Voltz Engine.</p>
    <ul style="list-style-type: circle;">
        <li> Install Forge, if you don't have it installed </li>
        <li> Add Voltz Engine to your mods folder </li>
        <li> Add ATR to your mods folder </li>
        <li> Done, feel free to edit configs and enjoy </li>
    </ul>
    </br>
    <hr>
    <h2>Change Log</h2>
    <ul>
     <li><font size="5"><b>#Next Version, or current Alpha release:</b></font>
        <ul class="changelog">
            <li>Added: Chat Emitter</li>
            <li>Added: Chat Detector</li>
            <li>Added: Audio Emitter</li>
            <li>Added: Entity Detector</li>
            <li>Added: Selection Detector</li>
            <li>Added: Arrow Plate</li>
            <li>Added: Kill Target Detector</li>
            <li>Added: Open Computer Drivers</li>
        </ul>
     </li>
    </ul>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
