```
<?php
   $ldaphost = 'ldap://10.16.3.30';
   $ldapport = 389;
   $ldappass =  '';
   $username = '';
   $ldapdn = "uid=".$username.",o=University of the Quezon City,c=PH";
   $ldapconn = @ldap_connect($ldaphost, $ldapport) or die("Could not connect to $ldaphost");
   ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
   @ldap_bind($ldapconn, $ldapdn, $ldappass);
   $filter = '(uid=sampleUsername)';
   $resldap = ldap_search($ldapconn, 'o=University of the Quezon City,c=PH', $filter);
   $info = ldap_get_entries($ldapconn, $resldap);
   for($i = 0; $i < $info['count']; $i++){
        echo $info[$i]['employeetype'][0];
   }
   /*print "<pre>";
   print_r($info);
   print "</pre>";*/
   exit;
?>
```
