<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/wiki.top.php"); ?>    
<h2> AMS Turret </h2>
<p> AMS, anti-missile system, turret is a simple defensive system built into the mod. It allows users to damage and shoot down missiles in an area. </p>
<img src="../../../../../img/icbm/amsTurret.png" alt="Anti-Missile System Turret" style="width:40%;height:40%;">
<p>Note: This is the newest model for the AMS-Turret. (Post: 2.10)</p>
<img src="../../../../../img/icbm/amsTurret_old.png" alt="Anti-Missile System Turret" style="width:40%;height:40%;">
<p>Note: This is the older model of the AMS-Turret. (Pre: 2.10)</p>
<h3>Stats</h3>
<p>Range: 100x 100z 200y<br>Rate of Fire: 2 shots a second<br>Ammo: Items OreDict[nuggets]</p>
<h3>FoF</h3>
<p>FoF, friend of foe, system is supported for this turret. Meaning it can be linked to the <a href="/pages/icbm/wiki/content/machines/fofstation.php">FoF Station</a> to note shoot down friendly missiles.</p>
<h3>Ammo</h3>
<p>At the moment the turret is designed to use metal nuggets as ammo. This will be changed in future versions to use an actual ammo item. Which may be contained in an additional mod designed around sentry guns. </p>
<h3>Gui</h3>
<img src="../../../../../img/icbm/ams.gui.png" alt="Anti-Missile System Turret" style="width:40%;height:40%;">
<p> Very simple inventory based Gui. Top 10 slots are used for ammo and will note non-ammo items with
a red circle behind the item.</p>
<h3>Audio</h3>
<p>Audio volume can be changed in the config files "config/bbm/ICBM.cfg"</p>
<p>AMS will play a click noise when it has no ammo but is trying to fire.</p>


<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/content.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>