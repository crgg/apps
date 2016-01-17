<?php


 // para encontral el path del logo ext,..


 function calcpath($valor) {
        $va = $valor ;
     if (file_exists($va)) {
         return $va;
     } else {
       $rv = '../'.$va;
        return $rv ;
     }
 }

// ESTO REPARA EL PATH PERDIDO
 
    function bugFixRequirePath($newPath)
    {
    	var_dump($newPath);
        $stringPath = dirname(__FILE__);
        if (strstr($stringPath,":")) $stringExplode = "\\";
        else $stringExplode = "/";
        
        $paths = explode($stringExplode,$stringPath);
        
        $newPaths = explode("/",$newPath);
        
        if (count($newPaths) > 0)
        {
            for($i=0;$i<count($newPaths);$i++)
            {
                if ($newPaths[$i] == "..") array_pop($paths);    
            }
            
            for($i=0;$i<count($newPaths);$i++)
            {
                if ($newPaths[$i] == "..") unset($newPaths[$i]);
            }
            
            reset($newPaths);
            
            $stringNewPath = implode($stringExplode,$paths).
                $stringExplode.implode($stringExplode,$newPaths);
            
                return $stringNewPath;
        }
       
}