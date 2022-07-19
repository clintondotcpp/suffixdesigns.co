<?php

const BR = '<br />';
    function copy_files($from_dir, $to_dir){
        $files = clean_scandir($from_dir);

        for($i=0; $i < count($files); $i++){
            //file exists(string $filename) : bool
            if(!file_exists("$to_dir/$files[$i]")){
                //copy(string $source : string $sest ) : bool
                if(copy("$from_dir/$files[$i]", "$to_dir/$files[$i]")){
                    echo "Copied $files[$i] to $to_dir/$files[$i]".BR;
                }
                else{
                    echo "Couldn't copy $files[$i]".BR;
                }
                
            }
            else{
                echo "$to_dir/$files[$i] exists!".BR;
            }
            
        }

        return clean_scandir($to_dir);
    }

    function local_server_path_to_http($local_server_path){
        $http_path = preg_replace("!, *?\:\\\!", "http://", $local_server_path);
        $http_path = preg_replace("! !", "%20", $http_path);
        $http_path = preg_replace("!\\\!", "/", $http_path);
        return $http_path;
    }

    function clean_scandir($dir){
        return array_values(array_diff(scandir($dir), array('..','.')));
    }

    function remove_ext($file_name){
        return preg_replace("!.(jpg|gif|jpeg|png|webp|mp4|m4v)!i","",$file_name);
    }
?>