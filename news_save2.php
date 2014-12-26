<?php
       
$path = 'your path';

       set_include_path(get_include_path() . PATH_SEPARATOR . $path);

$completeurl = $path.'news.xml';


$z = new XMLReader;
$z->open('news.xml');


// set up the document
$xml = new XmlWriter();
$xml->openMemory();
$xml->startDocument();

$newdt=$_POST['dt']; 
$newc=$_POST['txt'];

$xml->startElement('newsitem');

// CData output
$xml->startElement('date');
$xml->writeCData($newdt);
$xml->endElement();
$xml->startElement('content');
$xml->writeCData($newc);
$xml->endElement();


// end the document and output
$xml->endElement();


$doc = new DOMDocument;
$node = $doc->loadXML($z);

$node->news->appendChild($xml->flush());
echo $node;

?>





