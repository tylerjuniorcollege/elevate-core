<?php

    /* elevate main help file */
    
use ElevateAPI\Query\Ping as ElevatePing;

$ping = elevate_client(new ElevatePing());

$help = <<<VARCHAR
<h4>%s</h4>
<p>%s</p>
<p>%s</p>
VARCHAR;

$header = array('Ping Setting', 'Value');
$rows = array();
foreach($ping->body->table->tr as $tr) {
    $rows[] = $tr->td;
}
$help .= theme('table', array('header' => $header,
                              'rows' => $rows));

return sprintf($help, t('Welcome to the Elevate API Module'),
                      t('Use this module to populate data from the ElevateAPI to the Programs and Course Content Types'),
                      t('Below, you will find your Ping Settings based on the settings you have provided'));