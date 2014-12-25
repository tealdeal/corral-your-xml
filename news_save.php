<?php

       $path = 'your path';


    $newslist = simplexml_load_file('news.xml');

i=0;
foreach ($newslist->newsitem as $newsdata):
	   i++;
        $date2=$newsdata->date;
        $content2=$newsdata->content;
        $newdt=$_POST["dt"i]; 
                        $newdt2=echo "<![CDATA[" . $newdt . "]]>"; 
                        $newc=$_POST["txt"i]; 
                        $newc2=echo "<![CDATA[" . $newc . "]]>"; 

		echo $newc2
		echo $newdt2

	endforeach;

?>
