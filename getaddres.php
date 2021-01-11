<?php

// Must be run as root
function getaddres($ip)
{
    $arp_scan = shell_exec('arp -a | find  "'.$ip.'"');
    
    
    if(preg_match('/ [^.]+\-+[^.]+\-+[^.]+\-+[^.]+\-+[^.]+\-+[^.][^.] /', $arp_scan, $mac)){
        $resultado=$mac[0];
        return $resultado;
    }
    else{
        $resultado="PENDIENTE";
        return $resultado;
    }
    
}
/*$resultado=getaddres("172.19.4.21");
echo $resultado;*/

?>

	
	
	