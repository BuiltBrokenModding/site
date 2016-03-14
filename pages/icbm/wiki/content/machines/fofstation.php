<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/wiki.top.php"); ?>    
<h2> FoF Station </h2>
<p> FoF, Friend or Foe, station is a utility machine. It is designed to allow missiles and other devices to be coded with a common id. This way things like the <a href="/pages/icbm/wiki/content/machines/ams.php">AMS turret</a> will not shoot down friendly missiles.  </p>
<img src="../../../../../img/icbm/fofStation.png" alt="Friend or foe station" style="width:40%;height:40%;">
<p>Note: Current model is a temporay model. Hince why the bottom block is an iron block.</p>
<h3> Linking Machines </h3>
<p> Using the <a href="/pages/icbm/wiki/content/tools/datachip.php">data chip</a> users can link machines to the FoF system. If the machine is supported it will gain access to the machine's FoF ID. This allows things like the <a href="/pages/icbm/wiki/content/machines/launcher.php">launcher</a> and <a href="/pages/icbm/wiki/content/machines/silo.php">silo</a> to encode a common id. This way machines like the <a href="/pages/icbm/wiki/content/machines/ams.php">AMS turret</a> will not shoot down the missile. So long as the <a href="/pages/icbm/wiki/content/machines/ams.php">AMS turret</a> also shares the same id.
<h2> Main Gui </h2>
<img src="../../../../../img/icbm/fof.gui.main.png" alt="Friend or foe station main gui" style="width:40%;height:40%;">
<h3>Info</h3>
<p> This is the main gui for the machine and will open when the machine is right-clicked. The text box is used to change the active id used by the machine.
By default this field will be filled with a randomly generated id.
<h3>Buttons</h3>
<ul>
	<li>Archive	 - Toggles save function if the FoF id is ever changed. If enabled [x], any old ids will be archived so active objects with that id are not destroyed.</li>
	<li>Update	 - Sends the new FoF id to the server.</li>
	<li>Settings - Opens a gui that allows more detailed changes to be made to the machine.</li>
</ul>

<h2> Settings Gui </h2>
<img src="../../../../../img/icbm/fof.gui.settings.png" alt="Friend or foe station settings gui" style="width:40%;height:40%;">
<h3>Info</h3>
<p>This gui is opened using the settings button on the main gui. Using this gui the user management system can be enabled/disable and accessed. As well the FoF ID archive can be cleared to save on memory.</p>
<h3>Access</h3>
<p> If a user is not on the user list for a machine he will not have access. This will be noted with an "Access Denied" message. This means none of the settings can be changed on the machine by the user. At the time or writing this only the owner of the machine and the one to enable the system will have access. Future versions will add a user management GUI built into VoltzEngine itself. This system will allow for local user management and a global user profile. That can be used to manage several machines at the same time.</p>
<h3>Buttons</h3>
<ul>
	<li>Back	- Takes you back to the previous screen</li>
	<li>Enable	- Generates the user access profile. Need to prevent people from using the machine that shouldn't be able too.</li>
	<li>Disable	- Deletes the user access profile. Anyone can access the machine once this is done.</li>
	<li>Users	- Opens the user access profile where users can be added and groups can be modified.</li>
	<li>Clear	- Removes any archived FoF ids</li>
</ul>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/content.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>