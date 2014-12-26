
<form action="news_save2.php" method="POST">
<?php

       $path = '/corral-your-xml/';

       set_include_path(get_include_path() . PATH_SEPARATOR . $path);


	
echo "<p><h2>Date/Title: </h2><textarea name='dt' id='dt' style='width: 100%'></textarea><h2>Content</h2><textarea name='txt' id='txt' style='width: 100%'></textarea></p>";
?>

<script type='text/javascript' src='https://tealdeal.github.io/corral-your-xml/nicedit/nicEdit.js'></script> 
<script type='text/javascript'>
//<![CDATA[
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','link','unlink','xhtml'], iconsPath : 'nicedit/nicEditorIcons.gif'})});

//]]>
</script>

<script>
function dosav() {
	$('textarea').each(function(){
   	var IDOfThisTextArea =   $(this).attr('id');
   	nicEditors.findEditor(IDOfThisTextArea).saveContent();
	}
}

</script>


<input type="submit" value="Save News" onclick="dosav()">
</form>



