<?php
require('autoload.php');

$dns = new Metaregistrar\DNS\dnsProtocol();
$dns->setServer('ns1.rumahweb.com');
$result = $dns->Query('rumahweb.com','A');
/* @var $result Metaregistrar\DNS\dnsResponse */
foreach ($result->getResourceResults() as $resource) {
    if ($resource instanceof Metaregistrar\DNS\dnsAresult) {
        echo $resource->getDomain().' - '.$resource->getIpv4().' - '.$resource->getTtl()."\n";
    }
}

$dns_ns = new Metaregistrar\DNS\dnsProtocol();
$dns_ns->setServer('ns1.rumahweb.com');
$result = $dns_ns->Query('rumahweb.com','A');
/* @var $result Metaregistrar\DNS\dnsResponse */
foreach ($result->getResourceResults() as $resource) {
    if ($resource instanceof Metaregistrar\DNS\dnsAresult) {
        echo $resource->getDomain().' - '.$resource->getIpv4().' - '.$resource->getTtl()."\n";
    }
}
