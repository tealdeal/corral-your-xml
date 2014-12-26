<?php
    $newslist = simplexml_load_file('news.xml');
      foreach ($newslist as $newsdata):
        $date=$newsdata->date;
        $content=$newsdata->content;
        echo "<p><b>",$date,"</b>",$content,"</p>n";
    endforeach;
?>