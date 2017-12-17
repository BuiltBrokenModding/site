<?php 
    $page_title = "ICBM MC1.7";
    $title = "ICBM";
    $sub_title ="Minecraft missile mod";   
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.php");
    
?>
    <h2>!!Updating to 1.7!!</h2>
    <p>With the update to 1.7 the mod is in full rewrite. For the new version we have decided to focus more on the original design. Which is after all missiles that fly threw the sky at high speeds. This means we junked a good bit of content that was not part of the design. Don't worry though this content will not be deleted forever and may be recreated in our other mods. As for ICBM itself from now on it will only contain missiles and support machines to launch them.   </p>
    </br>
    <h2>!!New Ownership!!</h2>
    <p>ICBM has changed ownership from calclavia, who created the mod, to Dark who has been working on it since 1.5.2. This was done to prevent the mod from decaying due to lake of progress. The trade off however is darkguardsman gave up full rights to resonant induction. This means our team no longer supports resonant induction from a coding point of view.</p>
    </br>
     <h2>How to Install</h2>
    <p>Process is about the same as any other mod. So if you understand what your doing you can skip past this list. Just make sure to install Voltz Engine.</p>
    <ul style="list-style-type: circle;">
        <li> Install Forge, if you don't have it installed </li>
        <li> Add <a href="/pages/voltzengine/">Voltz Engine</a>to your mods folder </li>
        <li> Add ICBM to your mods folder </li>
        <li> Done, feel free to edit configs and enjoy </li>
    </ul>
    </br>
    <hr>
    <h2>Change Log</h2>
    <ul>
     <li><font size="5"><b>#Next Version, or current Alpha release:</b></font>
        <ul class="changelog">
            <li>Changed: Default missile firing system</li>
            <li>Added: Classic Missile Casing</li>    
            <li>Added: Classic Micro Missile Casing</li>
            <li>Added: Display only missile Tile</li>
            <li>Added: Kill timer to missile to prevent orphan missiles 
                    </br> Micro missile 1 min flight time 
                    </br> Small missile 10 min flight time
                    </br> Standard missile 1 hour flight time
                    </br> Medium missile 5 hour flight time
                    </br> Large missile 20 hour flight time
                    </br> Flight times are designed to kill missiles if they fly off without targets
                    </li>
            <li>Fixed: Placement NPE</li>            
        </ul>
    </li>
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
				
