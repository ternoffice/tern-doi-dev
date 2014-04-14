<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

return  array(
   'params' => array(

        // ANDS  DOI service point 1.1
        'andsMintUrl' =>       'https://services.ands.org.au/doi/1.1/mint.xml/',
        'andsUpdateUrl' =>     'https://services.ands.org.au/doi/1.1/update.xml/',
        'andsDeactivateUrl' => 'https://services.ands.org.au/doi/1.1/deactivate.xml/',
        'andsActivateUrl' =>   'https://services.ands.org.au/doi/1.1/activate.xml/',
        'andsMetadataUrl' =>   'https://services.ands.org.au/doi/1.1/xml.xml/',
        'appId' => 'TEST313ba574c47f1cdd8f626942dd8b6509441f23a9', // remove when releasing to Google Code
        'resource' => Array(
            'xmlns' => 'http://datacite.org/schema/kernel-2.1',
            'xmlns:xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            'xsi:schemaLocation' => 'http://datacite.org/schema/kernel-2.1 http://schema.datacite.org/meta/kernel-2.1/metadata.xsd'
           // 'xsi:schemaLocation' => 'http://datacite.org/schema/kernel-3 http://schema.datacite.org/meta/kernel-3/metadata.xsd'
        ),
        'strValue' => '@value',
        'strAttribute' => '@attributes',
        //'doi_citate_url' => 'http://dx.doi.org/',
        'doiCitateFormat' => '%C$s (%PY$s): %T$s. %P$s. doi:%D$s. <br/><a href="http://dx.doi.org/%D$s" target="_new">http://dx.doi.org/%D$s</a>',
        'doiCitateCreatorSeparator' => '; ',
        
    ),
)
?>
