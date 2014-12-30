<?php
/** Generates a few tables out of Versions Object array making a clean download area. 
 *      This generate is designed for viewing addon downloads for mincraft-forge
 *      It assumes that everything follows a standard formate for versions "MCVersion-MAJOR.MINOR.REVISbBuildNumber"
 *      All Version numbers will be parsed by this format until settings can be added to change this
 * 
 * This file was Originally created by Calcalvia but has been change to fit a new design
 * Programmer:  Darkgurdsman
 * Date:        Nov 14, 2014
 * Org:         Built Broken Studios
 */
class DownloadBuilder
{
    private $versions = array();
    private $mcVersions = array();
    private $downloadPHP;

    public function __construct(array $versions)
    {
        $this->versions = $versions;
        for($i = 0; $i < count($this->versions); $i++)
        {
            $version = $this->versions[$i];
            $exploded = explode("-", $version->number());
            $mcVersion = $exploded[0];
            if(!in_array($mcVersion, $this->mcVersions))
            {
                array_push($this->mcVersions,$mcVersion);
            }                
        }
    }

    /**
     * Creates an HTMl table consisting of all versions.
     * @return string - An HTML string of the built table.
     */
    public function build()
    {
        $id = $this->versions[0]->maven()->artifactID();
        $html = "<div id='#'maven-download-viewer-" . $id ."'#'>";
        for ($v = 0; $v < count($this->mcVersions); $v++)
        {
            $mcVersion = $this->mcVersions[$v];
            //TODO: Reorganize the format
            $html .= "<hr><h3>Minecraft " . $mcVersion . " Downloads</h3>";
            $html .= "<div><table id='#'maven-build-table " . $mcVersion ." '#' style='#'display:none;'#'>";
            $html .= "<thead><tr><td>Version</td><td>Files</td></tr></thead>";
            //TODO re-add dependency when it works <td>Dependency</td>
            
            //Loop threw all version objects creating rows in our table
            for ($i = 0; $i < count($this->versions); $i++)
            {
                $version = $this->versions[$i];
                $versionNumber = $version->number();
                $artifactURLs = array();
                //TODO create a map of MC versions to sub versions to reduce iteration time
                if(FileHelper::startsWith($versionNumber, $mcVersion))
                {
                    //Clean up version number so its easier to read, and removes MC version
                    $versionNumber = str_replace($mcVersion, "", $versionNumber);
                    $versionNumber = str_replace("-", "", $versionNumber);
                    
                    $html .= "<tr>";
                    
                    //Version Column
                    $html .= "<td data-order='" . $i . "'>";
                    if ($version->changes())
                        $html .= "<a href='#' tabindex='0' class='build-popup' role='button' data-toggle='popover' data-trigger='focus' data-content='" . $this->generateUnorderedList($version->changes()) . "'>" . $versionNumber . "</a>";
                    else
                        $html .= $versionNumber;                
                    $html .= "</td>";
                    
                    // Dependency Column 
                    $html .= "<td>";
                    $html .= $this->generateUnorderedList($version->dependencies());
                    $html .= "</ul>";
                    $html .= "</td>";
                    $html .= "<td>";

                    //Artifacts Column       
                    foreach ($version->artifacts() as $artifact)
                    {
                        //Create download URL
                        $url = $version->url() . "/" . $artifact;
                        
                        //Parse artifact name to make it look nicer
                        $linkName = str_replace($version->number(), "", $artifact);  // Remove version # as we already display it
                        $linkName = str_replace("--", "-", $linkName); //Remove extra - caused by removing version #
                        if(FileHelper::endsWith($linkName,"-.jar")) // Remove trailing - caused by removing version #
                        {
                            $linkName = FileHelper::str_lreplace("-", "", $linkName);
                        }
                        if(strpos($linkName, "deobf")) // Add info for dev downloads so users are not confused
                        {   
                            $linkName = $linkName . " - For Devs ";
                        }
                        
                        //Generate link and add it to list of links to display
                        $artifactURLs[] = "<a href='$url' target='_blank'>" . $linkName  . "</a>";
                    }

                    $html .= $this->generateUnorderedList($artifactURLs);
                    $html .= "</td>";
                    $html .= "</tr>";
                }
            }

            $html .= "</table></div>";
        }
        $html .= "</div>";
        return $html;
    }

    private function generateUnorderedList(array $arr)
    {
        $list = "<ul>";

        foreach ($arr as $element)
            $list .= "<li>" . $element . "</li>";

        $list .= "</ul>";

        return $list;
    }
} 