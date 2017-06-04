<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/wiki.top.php"); ?>    
<h2> Control Computer </h2>
<img src="../../../../../img/icbm/directSiloController.png" alt="Control computer picture next to open computer computer and small silo." align="absmiddle" style="width:50%;max-width:200px; height:auto;"></img>
<p> The control computer is a direct way to manage <a href="/pages/icbm/wiki/content/machines/silo.php">silos</a> and <a href="/pages/icbm/wiki/content/machines/launcher.php">launchers</a>. Instead of wirelessly connecting like the <a href="/pages/icbm/wiki/content/machines/controller.php">missile controller</a> it directly connects. Providing more control and automation options for the launcher. If <a href="https://oc.cil.li/index.php?/page/index.html">Open Computers</a> is installed it can be connected to a computer. Allowing additional call back methods to be accessed. </p>
<h3> Wrench Support </h3>
<p> Right click with wrench will enable/disable redstone support</p>
<h3> Redstone </h3>
<p> As of version 2.10.0 redstone only fires the missile. Future versions will include a GUI to specify what redstone does. For example switch targets, or output redstone when missile is fired. </p>
<h3> Open Computer Support </h3>
<p> Support for <a href="https://oc.cil.li/index.php?/page/index.html">Open Computers</a> is limited at the moment. Bellow are the supported commands as of version 2.10.0.<p>
<ul>
<li>isConnectedToLauncher() return bool - checks if a launcher is connected to the controller</li>
<li>hasMissile() return bool - checks if a missile is loaded</li>
<li>doesMissileHaveWarhead() return bool - checks if a missile is loaded with a warhead</li>
<li>doesMissileHaveGuidance() return bool - checks if a guidance system is loaded into the missile</li>
<li>doesMissileHaveEngine() return bool - checks if an engine is loaded into the missile</li>
<li>fireMissile() return bool - fires the missile, returns true if action is completed</li>
<li>canFireMissile() return bool, String - checks if a missile can be fired, returns true if can and reason if can't</li>
<li>setTarget(double, double, double) return true - sets the missile target</li>
<li>getTarget() return double, double, double - current aim point for the missile</li>
</ul>
<p>Component name is icbmSiloConnector<p>
<h4>Example of usage</h4>
<img src="../../../../../img/icbm/openComputerExample.png" align="absmiddle" style="width:80%;max-width:900px; height:auto;">></img>
<h2>History</h2>
<p>#2.10.0 - Added to ICBM</p>
<p>#2.10.0 - Basic OC support</p>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/content.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>