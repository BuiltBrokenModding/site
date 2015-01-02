<?php 
    $page_title="ICBM Support";
    $title = "Support";
    $sub_title ="for ICBM"; 
    $menu = array(
              'back'  => array('text'=>'Back',  'url'=>'#back'),
              'code'  => array('text'=>'Downloads',  'url'=>'downloads.php'),
              'wiki'  => array('text'=>'Wiki',  'url'=>'../wiki/'),
              'support'  => array('text'=>'Support',  'url'=>'../support.php')
    ); 
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.php");
    
?>
    </br>
    <h2> Hey there </h2>
    <p>If your here then you're having issues with ICBM, or you got lost. If its the ladder then click the back button. Anything else keep reading so the problem is fixed and neither of our time is wasted. </p>
    <div id="whattodo">
    <h2> What to do? </h2>
    <p>First thing to do is read our FAQ section bellow to see if the issue is common. If nothing in the FAQs helps then read the following section.</p>
    <h3> #1 Read issue area </h3>
    <p> First thing to do is read threw all issue reports created. Too see the issues click the github link above and read at your own pace. You can also use the search box to narrow down the result. </p>
    <h3> #2A If you find an existing Issue</h3>
    <p>If you find an issue report with the same general problem as yours you have a few options. One you can comment on the report with more info. Two you can monitor the report for someone to say it is fixed. Three walk away knowing the problem will be solved.</p>
    <h3> #2B Issue is closed but not fixed</h3>
    <p> First you need to check why the report was close so not to cause issues. If it was closed due to duplication find the original post. If it was marked as will not fix either the problem is rare, not an issue, or obsolete in newer versions. Finally if it was marked as fixed, your using the latest version, and at least a day has passed you can reopen the issue. Make sure when you reopen the issue you post more information. This should include the version your using, the error if there is one, and other important info.
    </p>
    <h3> #2C New Issue Report</h3>
    <p>Once you have found no duplicate of your issue then you can open a new one. To do this go to github link above and click 'New Issue'. Set the tittle of the issue to a short description of what is wrong. Do not say its broken, not working, or i have an issue. This will not tell me what is wrong. Instead lable it like 'Missiles will not launch', or 'Placing warheads crashes the game'. After this fill in the body of the issue with the information of what is wrong. Include MC version, Mod version, RE version, and other mod version. Add using pastebin.com or something similar the crash or error log if you have one. </p>
    </div>
    <div id="faq">
    <h2> FAQ -> Frequently Answered Questions <- FAQ </h2>
    <ul>
        <li>
            <h4>Q: Some Textures are missing?</h4>
            <p>A: From time to time texture name get messed up causing this to happen. As well when i add new items i may not have the texture right away. When this happen i still leave the item in game but have to wait. Everything should still work but you end up with a black & pink square.</p>
        </li>
        <li>
            <h4>Q: All the Textures are missing?</h4>
            <p>A: Most likely a bad build, download the jar again. If this doesn't work try a different build and report the build as bad.</p>
        </li>
        <li>
            <h4>Q: My bug report has not been answered?</h4>
            <p>A: Some days i don't have the time to read or answer every bug report. If this happens don't worry i will end up answering the bug report. It may just take a few days or weeks depending on what is currently on the TODO list. </p>
        </li>
        <li>
            <h4>Q: Game didn't load with ICBM?</h4>
            <p>A: There are a few things that could cause this namely you didn't install ICBM. To check this make sure that ICBM.jar is inside your mods folder. If it is in the mods folder where MC is installed when check to see if forge is installed. You can do this by seeing if you have a mods button when you load up MC. If you have no button go to http://www.minecraftforge.net/ for help installing forge. </p>
        </li>
        <li>
            <h4>Q: Minecraft says i'm missing Resonant Engine?</h4>
            <p>A: You must install resonant engine for ICBM 1.6.4 and above. It not only does most of the work it also contains most of the blast prefabs. Without it ICBM will not function, but no worries you can download it <a href="http://resonantengine.com/">here</a></p>
        </li>
        <li>
            <h4>Q: My Anti-virus alerts me that ICBM.jar contains a virus?</h4>
            <p>A: As long as you downloaded ICBM.jar from this site and not somewhere else you should be fine. If your Anti-virus keeps alerting you then either your anti-virus is bad or something is wrong. You may need to consult your settings in your anti-virus if this also happens with any jar.</p>
        </li>
    </ul>
    </div>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php"); ?>
				
