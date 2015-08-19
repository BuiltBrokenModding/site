<?php
class FileHelper
{
    public static function getFilesInDir($inPath)
    {
        $files = array();
        $path = $inPath;
        if(!FileHelper::endsWith($path,"/"))
        {
            $path = $inPath . "/";
        }
        
        if(FileHelper::startsWith($path,"/"))
        {              
            if(is_dir($path))            
            {   
                if ($handle = opendir($path))
                {
                    while (false !== ($entry = readdir($handle)))
                    {
                        if ($entry != "." && $entry != "..")
                        {
                            $folder = $path . $entry;
                            if (!is_link($folder))
                            {
                                $files[] = $entry;
                            }
                        }
                    }
                }
                closedir($handle);            
            }
        }
        else
        { 
            $matches = array();
            preg_match_all("/(a href\=\")([^\?\"]*)(\")/i", FileHelper::get_text($path), $matches);

            foreach($matches[2] as $match) 
            {
                if(!FileHelper::endsWith($match, "/"))
                {
                    $files[] = $match;
                }
            }
        }
        return $files;
    }
    
    public static function get_text($filename) 
    {
        try
        {
            if(get_headers($filename))
            {
                $fp_load = fopen("$filename", "rb");
                $content = "";
                if ( $fp_load ) 
                {
                    while ( !feof($fp_load) ) 
                    {
                        $content .= fgets($fp_load, 8192);
                    }

                    fclose($fp_load);
                    return $content;
                }
            }
        }
        catch (Exception $e) 
        {
            //echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    
    public static function fileFromFTP($ftp_server, $conn_id, $ftp_user_name, $ftp_user_pass)
    {
        // set up basic connection
        $conn_id = ftp_connect($ftp_server);

        // login with username and password
        $login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

        // get contents of the current directory
        $contents = ftp_nlist($conn_id, ".");

        // output $contents
        var_dump($contents);    
    }

    public static function parseProperties($txtProperties)
    {
        $result = array();
        $lines = explode("\n", $txtProperties);
        $key = "";
        $isWaitingOtherLine = false;
        foreach ($lines as $i => $line)
        {
            if (empty($line) || (!$isWaitingOtherLine && strpos($line, "#") === 0))
                continue;
            $value = "";
            if (!$isWaitingOtherLine)
            {
                $key = substr($line, 0, strpos($line, '='));
                $value = substr($line, strpos($line, '=') + 1, strlen($line));
            }
            else
            {
                $value .= $line;
            }
            /* Check if ends with single '\' */
            if (strrpos($value, "\\") === strlen($value) - strlen("\\"))
            {
                $value = substr($value, 0, strlen($value) - 1) . "\n";
                $isWaitingOtherLine = true;
            }
            else
            {
                $isWaitingOtherLine = false;
            }
            $result[$key] = $value;
            unset($lines[$i]);
        }
        return $result;
    }        
    
    public static function startsWith($haystack, $needle)    
    {        
        return $needle === "" || strpos($haystack, $needle) === 0;    
    }        
    
    public static function endsWith($haystack, $needle)    
    {        
        return $needle === "" || substr($haystack, -strlen($needle)) === $needle;    
    }
    
    public static function str_lreplace($search, $replace, $subject)
    {
        $pos = strrpos($subject, $search);

        if($pos !== false)
        {
            $subject = substr_replace($subject, $replace, $pos, strlen($search));
        }

        return $subject;
    }
} 