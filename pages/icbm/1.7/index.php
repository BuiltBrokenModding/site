<?php 
    $page_title = "ICBM MC1.7";
    $mod_name = "ICBM";
    $mod_sub ="Minecraft missile mod";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.php");
    
?>
    <h2>!!IMPORTANT UPDATE NOTICE!!</h2>
    <p>For those that played with ICBM before 1.7 update you need to slow down and read this first. ICBM is no longer the same mod as it use to be. To start with it has changed ownership from Calclavia to DarkGuardsman. Second all content that is not a missile or launcher has been removed. This was done to free up the design to make it easier to update. As well this allows the mod to evolve towards its original design rather than become a pit for warfare concepts. </p>
    <hr>
    <h2>Change Log</h2>
    <ul>
    <li><font size="5"><b>#2.3.0:</b></font>
        <ul class="changelog">
            <li>Removed: Test Warhead</li>
            <li>Removed: Test Inverted Warhead</li>
            <li>Added: Micro Missile - Listed as Rocket</li> 
            <li>Added: Small Missile - Listed as Small Missile</li>    
            <li>Added: Medium Missile - Listed as Large Missile</li> 
            <li>Added: Large Missile - Listed as ICBM</li>
            <li>Added: Module Crafting</li>
            <li>Added: Engine Module Slot</li>
            <li>Added: Guidance Module Slot</li>
            <li>Added: Warhead Module Slot</li>
            <li>Added: Void Engine - Creative mode only engine</li>
            <li>Added: Coal Engine - Currently not enabled</li>
            <li>Added: Micro Warhead</li> 
            <li>Added: Small Warhead</li>  
            <li>Added: Medium Warhead</li> 
            <li>Added: Large Warhead</li>
            <li>Added: Empty Missiles - Listed as Missile Casing</li> 
            <li>Added: Empty Warhead - Listed as Warhead Casing</li>
            <li>Added: Difference between loaded and unloaded warheads</li>
            <li>Added: Russian translation by <a href="https://github.com/Adaptivity">Adaptivity</a></li>
            <li>Added: TNT Warhead - classic explosive </li>
            <li>Added: Let It Snow Warhead - winter themed explosive</li>
            <li>Added: JUnit testing for warhead modules</li>
            <li>Changed: Missile to Act as an ammo item</li>
            <li>Changed: Handheld launcher to act more like a weapon</li>
            <li>Changed: Missile to Standard Missile</li>
            <li>Changed: Warhead to Standard Warhead</li>
            <li>Changed: Missile tip to not render when warhead is not installed</li>            
            <li>Changed: Handheld launcher to only fire micro missiles</li> 
            <li>Fixed: Lang file issues with item info</li>            
        </ul>
    </li>
    <li><font size="5"><b>#2.0.0 -> 2.2.0:</b></font>
        <ul class="changelog">
            <li>Removed: Radar Station</li>
            <li>Removed: EMP Tower</li>
            <li>Removed: Explosives</li>
            <li>Removed: Cruise Launcher</li>
            <li>Removed: Grenades</li>
            <li>Removed: Cruise Launcher</li>
            <li>Removed: Sentry Guns</li>
            <li>Removed: Tracker</li>
            <li>Removed: Remote Detonator</li>
            <li>Removed: Concrete</li>
            <li>Removed: Blast Glass</li>
            <li>Removed: Glass Pressure Plate</li>
            <li>Removed: Glass Button</li>
            <li>Removed: Energy Cost for Hand-held Launcher</li>
            <li>Removed: Old blast code</li>
            <li>Removed: Riding Missiles, it will be re-added</li>
            <li>Added: Pathfinder to Blasts</li>
            <li>Added: Mutli-threading</li>
            <li>Added: Energy dispersion for Blasts</li>
            <li>Added: Block Placement delay</li>
            <li>Added: Blast blast prevention events</li>
            <li>Added: Block Placement Events</li>
            <li>Added: Trigger types</li>
            <li>Added: Missile warheads</li>
            <li>Added: Size scaling to warheads</li>
            <li>Added: Explosives pushing players</li>
            <li>Changed: Default Missile size to 2.5B</li>
            <li>Fixed: Explosives breaking bedrock or unbreakable blocks</li>
            <li>Fixed: Entities taking damage behind walls</li>
            <li>Fixed: Missiles passing threw walls</li>
            <li>Fixed: MFFS support</li>
        </ul>
    </li>
    </ul>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
