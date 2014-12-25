<?php

       $path = 'your path';

    $newslist = simplexml_load_file('news.xml');
	

      foreach ($newslist->newsitem as $newsdata):
        $date=$newsdata->date;
        $content=$newsdata->content;
        $feat=$newsdata->feat;
	if (((string)$feat) == 'checked'){
        echo "<p>" . $date . " " . $content . "</p>"/n;
	}
    endforeach;
?>
