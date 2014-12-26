<?php

       $path = 'your path';

echo "  <script type='text/javascript' src='/nicedit/nicEdit.js'></script> 
<script type="text/javascript">
//<![CDATA[
bkLib.onDomLoaded(function() { nicEditors.allTextAreas({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html']}) });

});
//]]>
</script>";

    $newslist = simplexml_load_file('news.xml');
	

      foreach ($newslist->newsitem as $newsdata):
        $date=$newsdata->date;
        $content=$newsdata->content;
        echo "<p><textarea><b>date:</b>" . $date . "</textarea><br /><textarea>" . $content . "</p></textarea><br />";
    endforeach;
?>
