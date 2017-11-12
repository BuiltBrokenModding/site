<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/wiki.top.php"); ?>    

<div>
	<h2> Silo Display <input type="button" value="^ Show" onclick="toggleSpan(this, 'gui')"></h2>
	<span id="gui" style="display: none;">  
		<p> This machine is used to display information contained in a wireless silo control network. </p>
		
		<h3> Init Gui </h3>
			<img src="\img\icbm\siloDisplay.gui.init.png" alt="" style="max-width:40%; height:auto; min-width:200px;"/>
			<p> This is the first Gui that opens when clicking the tile. It gives basic information on how to use the tile. </p>
		<h3> Data Loaded Gui </h3>
			<img src="\img\icbm\siloDisplay.gui.png" alt="" style="max-width:40%; height:auto; min-width:200px"/>
			<h5> Gui Key </h5>
				<ul>
					<li>1. Silos Buttons</li>
					<li>2. Quick Fire Buttons</li>
					<li>3. Silo Connection Status</li>
					<li>4. Data Refresh Button</li>
					<li>5. Silo Connector Info</li>
					<li>6. Next/Prev Connector</li>
					<li>7. Next/Prev Controller</li>
				</ul>
			
			<h5> Info </h5>
				<p> The <b>Gui</b> in the above picture is a single page of data for the network. Each page displays silos connected to a silo connector, attached to a silo controller, attached to a wireless network. </p>
				
				<p> Clicking the <b>silo button</b> will open up settings for customizing a silo. It also allows encoding data to remote launch tools.. Remote Detonator & Laser Detonator. </p>
				
				<p> Clicking the <b>fire button</b> will quickly launch the missile in the silo. The missile will be aimed at the target encoded into the launcher. Be warned there are currently no safities for this button. Meaning the missile will fire as soon as the button is clicked. </p>
				
				<p> The <b>refresh button</b> downloads data from the controllers. This data is static and does not update once downloads. To update the data the refresh button needs to be clicked again. </p>
				
				<p> The <b>next & prev connector button</b> will switch to currently viewed connector. You can tell what connector is being viewed by the connector info at the bottom of the GUI. Which can be modified in the connector Gui, open on right click of the connector. </p>
				
				<p> The <b>next & prev controller button</b> switchs the current viewed controller. These controllers are wireless connected to the current controller linked to the display. This means it may not always provide data for viewing. However, when it does it allows controller silos at remote distances. </p>
		<h3> Silo Setting Gui </h4>
			<p> When clicking a button with a silo name a settings GUI opens. </p>
			<img src="\img\icbm\siloDisplay.gui.silo.settings.png" alt="" style="max-width:40%; height:auto; min-width:200px"/>
	</span>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/icbm/wiki/content.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>