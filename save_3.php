<?php

class my_node extends SimpleXMLElement
{
    public function prependChild($name, $value)
    {
        $dom = dom_import_simplexml($this);

        $new = $dom->insertBefore(
            $dom->ownerDocument->createElement($name, $value),
            $dom->firstChild
        );

        return simplexml_import_dom($new, get_class($this));
    }
}
$newslist = simplexml_load_file('news.xml');
$newxml = simplexml_load_file('news2.xml');

$newslist->news->prependChild('newsitem',$newxml->newsitem);

echo $newslist->asXML();

?>