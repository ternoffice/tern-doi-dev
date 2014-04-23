<?php
require_once('/var/www/simplesamlphp-1.8.3/lib/_autoload.php');
 
$as = new SimpleSAML_Auth_Simple('default-sp');
 
$as->requireAuth();
 
$attributes = $as->getAttributes();
echo "<pre>";
print_r($attributes);
echo "</pre>";
?>
<a href="http://qcifvm2.genome.at.uq.edu.au/doi/uqauth/module.php/core/authenticate.php?as=default-sp&logout">Logout</a>
<?php 
//phpinfo();
