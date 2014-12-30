
<div class="downloads">
<?php
include("file-helper.php");
include("maven.php");
include("version.php");
include("download-builder.php");

    $maven = new Maven($url, $local, $group, $id);
    $maven->cache();
    $builder = new DownloadBuilder($maven->getBuilds());

    if ($maven->error)
    {
        return "Maven Viewer Error: " . $maven->error;
    }
    echo $builder->build();   
    
?>

</div>

