
<?php 
    $page_title="Modpacks";
    $title ="Modpacks";
    $sub_title = "Standard Modpack Permission Reqs";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
   
?>    
    <div class="news">
    <div>
        <h2>Permissions</h2>
        <p>Modpacks with permissions for ICBM will be listed <a href="https://docs.google.com/spreadsheets/d/13SXh1AeaJx07Tt4MXCg-Kz5mNxXLI-ilShrIZlSC8E8/edit?usp=sharing">here</a></p>
        </br>
        <div>
            <h2>Mods covered by this page</h2>
            <span>
                <input type="button" value="^ Show" onclick="toggle(this)">
            </span>
            <span style="display: none;">  
                <h4>Mods you need permissions for</h4>
                <ul> 
                    <li>Addicted To Red</li>
                    <li>AI-Improvements</li>
                    <li>Armory</li>
                    <li>Assembly Line</li>
                    <li>Basic Industry</li>
                    <li>Corruptions</li>
                    <li>Farm Tech</li>
                    <li>ICBM</li>
                    <li>ICBM-Classic</li>
                    <li>Mining 101</li>
                    <li>Military Base Decor</li>
                    <li>Watch Your Step</li>
                </ul>
         
                <h4>Mods you don't need ask permissions for</h4>
                <ul> 
                    <li>Voltz Engine</li> 
                    <li>Coding Lib</li>
                    <li>Any mod in the Single Blocks Mod series </li>
                </ul>
                <h4>Mods we don't allow in packs</h4>
                <ul> 
                    <li>Creations - by client's request </li> 
                    <li>Minecraft JUnit - this is a dev only tool </li>
                    <li>VoltzEngineEssentials - should be installed by a server admin</li>
                </ul>
            </span>
            </br>
            </br>
            </br>
        </div>
    </div>
    
    <div>
        <h3>Custom Mod Versions</h3>
        <span>
            <input type="button" value="^ Show" onclick="toggle(this)">
        </span>
        <span style="display: none;"> 
        <p> We ask that you get approval for custom versions before using them</p>

        <p>Once you get approval you need to follow these guidelines</p>
        <ul style="padding-left:5%;">
            <li>You need to change the version # and name of the mod to say custom-yourName or custom-modpackName</li>
            <li>You need to notify us your using a custom version</li>
            <li>You need to notify us when you stop using a custom version</li>
            <li>You need to notify users of the modpack the version is custom</li>
            <li>You need to notify users and BBM staff of the changes you make</li>
            <li>Make sure users of the modpack come to you about bugs first</li>
            <li>Any bugs you fixed need to be reported to BBM issue tracker on GitHub</li>
        </ul>
        </span>
    </div>
    
    <div>
        <h3>Recipe Changes</h3>
        <span>
            <input type="button" value="^ Show" onclick="toggle(this)">
        </span>
        <span style="display: none;"> 
        <p>You are welcome to change recipes so the mod fits your theme and progression in the modpack. We ask however you make sure your users know what changes you made. This can be done through a wiki for the modpack or short desc. on the download page for the modpack.</p>
        </span>
    </div>
    </br>
    </br>
    <div>
        <h3>Public Modpacks</h3>
        <span>
            <input type="button" value="^ Show" onclick="toggle(this)">
        </span>
        <span style="display: none;">            
            <p>Public modpacks are any collection of mods & files that can be accessed from the web easily. This includes server only modpacks that have no whitelist or password for the download.</p>
            <p>In order to get rights to distribute the mod as part of a modpack, you need to get permissions from Built Broken Modding. To do this just talk to one of our senior devs but be prepared for a few questions about your modpack.</p>
            <h4>Requirements</h4>
            <ul style="padding-left:5%;">
                <li>Solid core theme that doesn't change</li>
                <li>Rights to distribute any files contained in the modpack.</li>
                <li>No kitchen soup modpacks</li>
            </ul>
            <h4> How to keep your Permissions</h4>            
            <ul style="padding-left:5%;">
                <li> Give credit to the team </li>
                <li> Provide a link to the mod page </li>
                <li> Maintain your modpack </li>
                <li> Handle bugs before passing them to devs</li>
                <li> Have permissions for other mods</li>
                <li> Make no profit off the pack</li>
                <li> Follow Minecraft <a href="https://account.mojang.com/documents/minecraft_eula">EULA</a> </li>
            </ul>
            <h4> Additional stuff </h4>
            <p> At any time, we can revoke your permission without reason or notification. Normally this will only happen if you violate our pack's rules, Built Broken Modding EULA, Minecraft EULA, copyright laws, or abuse users. If your permissions are revoked we will try to notify you but are not required to do so. If your permissions are revoked you have up to a few weeks to correct any issues. At which point you can attempt to re-apply for modpack permissions.</p>
        </span>
    </div>
    <div>
        <h3>AT Launcher Modpacks</h3>
        <span>
            <input type="button" value="^ Show" onclick="toggle(this)">
        </span>
        <span style="display: none;">
        <p> As long as you use the adfly links for download you do not need to ask for permission. You still need to follow the Public modpack rules if the pack is public.</p>
        <h4>Rules & Requirements</h4>
        <p> Same as public modpacks</p>
        <p> Please look at http://wiki.atlauncher.com/mod_special_cases:journeymap to know how to do downloads via browser.</p>
        </span>
    </div>
    
    <div>
        <h3>Curse Launcher Modpacks</h3>
        <span>
            <input type="button" value="^ Show" onclick="toggle(this)">
        </span>
        <span style="display: none;">
        <p> As long as you use curse download links you do not need to ask for permission. You still need to follow the Public modpack rules if the pack is public.</p>
        <h4>Rules & Requirements</h4>
        <p> Same as public modpacks</p>        
        </span>
    </div>
    
    <div>
        <h3>Private Modpacks</h3>
        <span>
            <input type="button" value="^ Show" onclick="toggle(this)">
        </span>
        <span style="display: none;">           
            <p>A private modpack is any pack you give to your buddies. That is not downloaded from a website and can't be accessed by random users.</p>
            <h4>Rules & Requirements</h4>
            <p> Same as public modpacks excluding theme, and mod restrictions.</p>
        </span>
    </div>
    
    <div>
        <h3>Server Modpacks</h3>       
        <span>
            <input type="button" value="^ Show" onclick="toggle(this)">
        </span>
        <span style="display: none;">           
            <p>In order for a modpack to be considered server only it needs to have a whitelist for login or password on the download.</p>           
            <h4>Rules & Requirements</h4>
            <p> Same as public modpacks excluding theme, and mod restrictions. </p>
        </span>
    </div>
    
    <div>
        </br>
        </br>
        </br>
        <h3>Frequently asked questions</h3>
        <span>
            <input type="button" value="^ Show" onclick="toggle(this)">
        </span>
        <span style="display: none;">    
            <h4>Do you give out global permissions for all mods you make?</h4>
            <p> Normally we don't unless a modpack team has created several well-made packs</p>
            <h4>Do I need to ask permission for each mod?</h4>
            <p> Yes but you can ask for several mods in one go.</p>
            <h4>Why the rules?</h4>
            <p> The main idea is to ensure the quality of the user's experience. You can blame modpacks that have abused the usage of our mods for these rules. </p>
            <h4>What is a kitchen soup pack?</h4>
            <p>Generally, it's a modpack that has about every mod shoved in creating a 200+ mod setup.</p>
            <h4>Why single out kitchen soup packs?</h4>
            <p>There is a list of reason why we don't support these kinds of packs. The mains ones are no theme, compatibility issues, gameplay loss, performance nightmares, and lack of maintenance by the pack author. Not may pack authors can properly put together a very large modpack with a cluster of different themed mods.</p>
            <h4>Do donations count as profit?</h4>
            <p>The short answer is no. The long answer is there are rules defined by organizations for what counts as a donation and how to use donations. Mainly donations need to be used only for the support of the modpack. This can be just about anything but normally is hiring developers to fix bugs, commissioning art for the pack, commissioning mods for the pack, renting servers, paying for services(IRC cloud, Github, skype, file servers). Normally donations should not be used for the modpack creators personal needs. Such as buying toys, games, books, personal services(Pandora, Xbox Live), or in other words things that have not effect on the modpack/users.</p>
            <h4>Does adfly count as profit?</h4>
            <p>This one is in muddy waters. Personally, we at BBM say "no sites like adfly do not count as profiting from a mod" this is as long as its treated like a donation. That being said you will need to make sure each mod author is ok with the usage of adfly for the entire pack.</p>
            <h4>Do mod authors really have control over modpacks?</h4>
            <p>If the modpack contains files created by the mod author then yes. This the same idea as a game company controlling who can install their games. Even the Minecraft EULA has a similar rule preventing the distribution of their files.</p>
            <h4>Mojang said that mod authors should share their mods in the MC <a href="https://account.mojang.com/documents/minecraft_eula">EULA</a>.</h4>
            <p>Not really, Mojang was implying in a very indirect way they need access to upload/download map data. As well other files that are required for the game to function. </p>
            <h4>Can we sell items on our servers only modpacks?</h4>
            <p>In almost all cases no. However, if you plan to sell cosmetic only items you need to come talk to us. At which point we will lay down the requirements and explain what is allowed under the MC EULA.</p>
        </span>
    </div>
    </div>
    <p>Click here to apply for modpack permissions.</p>
    <button title="Click to show/hide content" type="button" onclick="if(document.getElementById('BBMR') .style.display=='none') {document.getElementById('BBMR') .style.display=''}else{document.getElementById('BBMR') .style.display='none'}">Show/hide</button>
    <div id="BBMR" style="display:none">
    <iframe src="https://docs.google.com/forms/d/11BA8es5LNFAXtiF571JN4nQNE5rM5ycshAxbpjWYjjA/viewform?embedded=true" width="760" height="2500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
    </div>
    </br>
    </br>

    <script>
        function toggle(thing) {
            var element = thing.parentNode.parentNode.getElementsByTagName('span')[1];
            
            if (thing.value.charAt(0) == '^') {
              
                thing.value = thing.value.replace("^ Show", "* Hide");
                thing.value = thing.value.replace("^", "*");
                element.style.display = '';
            } 
            else 
            { 
                thing.value = thing.value.replace("* Hide", "^ Show");
                thing.value = thing.value.replace("*", "^");
                element.style.display = 'none';                 
            }
        }
    </script>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
