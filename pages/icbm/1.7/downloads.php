<?php 
    $page_title = "ICBM MC1.7";
    $mod_name = "ICBM";
    $mod_sub ="Minecraft missile mod";
    include($_SERVER['DOCUMENT_ROOT'] . "/php/top.mod.downloads.php");
    
?>
    <h2>Info</h2>
    <p>By downloading these files you agree to the <a href="https://raw.githubusercontent.com/Universal-Electricity/ICBM/master/license.md">EULA</a> </p>
    <p> Currently ICBM is a work in progress and not completed. Expect missing crafting recipes, items, blocks, and features. </p>
    </br>
    <p><b> Sponsored by: </b></p>
    <p><img src="http://i577.photobucket.com/albums/ss215/bobstrong/Screenshot%202015-08-15%2002.26.05_zpsflostlsv.png" alt=" photo Screenshot 2015-08-15 02.26.05_zpsflostlsv.png" border="0" /></p>
    <p>Sign up for excellent hosting with&nbsp;<a href="http://www.akliz.net/bbm">http://www.akliz.net/bbm</a></p>
    </br>
    <h2>Curse Downloads</h2>
    <iframe src="http://widget.mcf.li/mc-mods/minecraft/225502-icbm?version=1.7.10" width="100%" style="border: none;"></iframe>
    <p> Most of our stable releases are done threw curse. So feel free to use the link above to get downloads. </p>
    <h2>Development Downloads</h2>
    <p> These downloads are hot off our build servers with the latest features. Download at your own risk and don't be suprised if they crash. </p>
    <?php 
        $downloadPageContent = FileHelper::get_text("http://builtbroken.com/maven/dev/builtbroken/icbm/ICBM/downloads/downloads-1.7.10.php");
        if($downloadPageContent)
        {
            echo $downloadPageContent;
        }
        else
        {
            echo '<p>It seems our download plugin has failed use this link <a href="http://adf.ly/2380428/ci.builtbroken.com/maven/">maven</a> file system.</p>';
        }
    ?>
    </br>
    </br>
    <p>At any time if the download plugin fails you can access the downloads threw our <a href="http://adf.ly/2380428/ci.builtbroken.com/maven/">maven</a> file system.</p>
    
<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/php/bottom.php");
?>