<?php
$dns = dns_get_record('amikom.ac.id', DNS_NS);
echo "<pre>";
var_dump($dns);
