<?php
include("file-helper.php");
class CNavigation 
{
  public static function ListMenu($items) 
  {
    $html = "\t<ul class='listmenu'>\n";
    foreach($items as $item) 
    {
        $actualUrl = $item['url'];
        if(FileHelper::startsWith($actualUrl, '#back'))
        {
            $html .= "\t\t<li><a href='javascript:history.back()'>{$item['text']}</a></li>\n";
        }
        else
        {
            $html .= "\t\t<li><a href='{$actualUrl}'>{$item['text']}</a><li>\n";
        }
    }
    $html .= "\t</ul>\n";
    return $html;
  }
  
  public static function ContentMenu($items) 
  {
    $html = "\t<ul class='contentmenu'>\n";
    foreach($items as $item) 
    {
        $html .= "\t\t<li><a href='{$item['url']}'>{$item['text']}</a><li>\n";
    }
    $html .= "\t</ul>\n";
    return $html;
  }
};
?>