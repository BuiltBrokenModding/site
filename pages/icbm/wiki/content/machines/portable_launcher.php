<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/wiki.top.php"); ?>    
<h2> Portable Launcher </h2>
<p> Self contained launcher that can be setup at the front of the fight. Fires a single <a href="/pages/icbm/wiki/content/missiles/small.php">small missile</a> with a range of 200 blocks.</p>

</br>
<h3> Launcher Screen (GUI) </h3>
<p> In order to open the launcher GUI you need to right click with an empty hand. For the portable version the GUI only contains location data and minor launching settings. </p>
</br>
<h3> Interactions </h3>
<ul>
    <li> <b>Right click empty hand</b> will open the GUI </li>
    <li> <b>Shift + Right click empty hand</b> take missile out of the launcher </li>
    <li> <b>Right click with a missile</b> will place the missile into the launcher </li>
    <li> <b>Right click with Flint & Steel</b> will fire the missile </li>
</ul>
<br>
<h3> Limits </h3>
<p>Launcher is limited to a 200 block max range. This prevents the portable launcher from being used a cheap replacement the stationary version. It will also prevent the missile from self targeting within 20 blocks. </p>
</br>
<h2>History</h2>
<ul>
    <li>(2.4.0) Gui Can set target of the missile </li>
    <li>(2.3.0) First release could only aim 100 blocks norths </li>
    <li>(2.3.0) Originally designed as a dev test tool </li>
</ul>
</br>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/content.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>