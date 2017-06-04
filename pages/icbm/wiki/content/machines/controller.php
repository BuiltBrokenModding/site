<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/wiki.top.php"); ?>    
<h2> Missile Controller </h2>
<img src="../../../../../img/icbm/controller.png" alt="Missile Controller" style="width:40%;height:40%;">
<p> Missile controller is the main way to fire missiles in the mod. It allows up to 5 missiles systems to be connected and controlled. </p>
<h3>Gui</h3>
<img src="../../../../../img/icbm/controller.guiempty.png" alt="Missile Controller" style="width:40%;height:40%;">
<p> By default the controller will have no <a href="/pages/icbm/wiki/content/machines/silo.php">silos</a> added. Unless you have placed it near a <a href="/pages/icbm/wiki/content/machines/launcher.php">launcher</a> and <a href="/pages/icbm/wiki/content/machines/silo.php">silo</a>.</p>
<img src="../../../../../img/icbm/controller.guinomissile.png" alt="Missile Controller" style="width:40%;height:40%;">
<p>Once linked using a <a href="/pages/icbm/wiki/content/tools/datachip.php">data chip</a> the silo will show the launcher. If no missile is in the launcher the fire button can't be pressed.</p>
<img src="../../../../../img/icbm/controller.guimissile.png" alt="Missile Controller" style="width:40%;height:40%;">
<p>Once a missile is in the launcher the fire button can be pressed</p>
<img src="../../../../../img/icbm/controller.target.png" alt="Missile Controller" style="width:40%;height:40%;">
<p> Clicking the launcher button will cause the target position gui to open. With this screen the target position can be modified. A <a href="/pages/icbm/wiki/content/tools/gpsdatachip.php">GPS data chip</a> can also be used directly on the silo to do this as well.</p>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/content.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>