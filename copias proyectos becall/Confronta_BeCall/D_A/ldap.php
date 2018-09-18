<?php
require_once("config.php");
function mailboxpowerloginrd($user,$pass){
	 $ldaprdn = trim($user).'@'.'ALNPEREIRA.LOCAL'; 
     $ldappass = trim($pass); 
     $ds = 'ALNPEREIRA.LOCAL'; 
     $dn = DN;  
     $puertoldap = 389; 
     $ldapconn = ldap_connect($ds,$puertoldap);
       ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION,3); 
       ldap_set_option($ldapconn, LDAP_OPT_REFERRALS,0); 
       $ldapbind = @ldap_bind($ldapconn, $ldaprdn, $ldappass); 
       if ($ldapbind){
		 $filter="(|(SAMAccountName=".trim($user)."))";
         $fields = array("SAMAccountName"); 
         $sr = @ldap_search($ldapconn, $dn, $filter, $fields); 
         $info = @ldap_get_entries($ldapconn, $sr); 
		 $array = $info[0]["samaccountname"][0];
	   }else{ 
         	$array=0;
       } 
     ldap_close($ldapconn); 
	 return $array;
} 
?>
