<?php

function alert_error($msg) {
    
	echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
		  <strong>Error!</strong> $msg
		  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			<span aria-hidden=\"true\">&times;</span>
		  </button>
		</div>";
}

function alert_successful($msg) {
    
	echo "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
		  <strong>Successful!</strong> $msg
		  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
			<span aria-hidden=\"true\">&times;</span>
		  </button>
		</div>";
}

## POST Function ##
function p($par, $st = false){
    if( $st ){
        return mysql_real_escape_string(htmlspecialchars(addslashes(trim(htmlentities($_POST[$par])))));
    }

    return mysql_real_escape_string(addslashes(trim(htmlentities($_POST[$par]))));
}

## GET Function ##
function g($par){
    return strip_tags(trim(addslashes(htmlentities($_GET[$par]))));
}

## IP ADDRESS Function ## 
function ip()
{
    if( getenv("HTTP_CLIENT_IP") )
    {
        $ip = getenv("HTTP_CLIENT_IP");
    }
    else
    {
        if( getenv("HTTP_X_FORWARDED_FOR") )
        {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
            if( strstr($ip, ",") )
            {
                $tmp = explode(",", $ip);
                $ip = trim($tmp[0]);
            }

        }
        else
        {
            $ip = getenv("REMOTE_ADDR");
        }

    }

    return $ip;
}

## GET BROWSER Function ##
function getBrowser() 
 { 
     $u_agent = $_SERVER['HTTP_USER_AGENT']; 
     $bname = 'Unknown';
     $platform = 'Unknown';
     $version= "";

     // Which platform did it come from, Linux, Windows, MacOSX?
     if (preg_match('/linux/i', $u_agent)) {
         $platform = 'linux';
     }
     elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
         $platform = 'mac';
     }
     elseif (preg_match('/windows|win32/i', $u_agent)) {
         $platform = 'windows';
     }
     
     // Then take a look at the browser
     if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
     { 
         $bname = 'Internet Explorer'; 
         $ub = "MSIE"; 
     } 
     elseif(preg_match('/Firefox/i',$u_agent)) 
     { 
         $bname = 'Mozilla Firefox'; 
         $ub = "Firefox"; 
     } 
     elseif(preg_match('/Chrome/i',$u_agent)) 
     { 
         $bname = 'Google Chrome'; 
         $ub = "Chrome"; 
     } 
     elseif(preg_match('/Safari/i',$u_agent)) 
     { 
         $bname = 'Apple Safari'; 
         $ub = "Safari"; 
     } 
     elseif(preg_match('/Opera/i',$u_agent)) 
     { 
         $bname = 'Opera'; 
         $ub = "Opera"; 
     } 
     elseif(preg_match('/Netscape/i',$u_agent)) 
     { 
         $bname = 'Netscape'; 
         $ub = "Netscape"; 
     } 
     
     // Determine the version number of the browser.
	// here we are looking using regular expressions.
     $known = array('Version', $ub, 'other');
     $pattern = '#(?<browser>' . join('|', $known) .
     ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
     if (!preg_match_all($pattern, $u_agent, $matches)) {
         
     }
     

     $i = count($matches['browser']);
     if ($i != 1) {

         if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
             $version= $matches['version'][0];
         }
         else {
             $version= $matches['version'][1];
         }
     }
     else {
         $version= $matches['version'][0];
     }
     
     if ($version==null || $version=="") {$version="?";}
     
     return array(
         'userAgent' => $u_agent,
         'name'      => $bname,
         'version'   => $version,
         'platform'  => $platform,
         'pattern'    => $pattern
     );
 } 

?>
