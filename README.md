corral-your-xml
===============

put your loose xml ponies back in their corral!  edit and add to your xml news feed with php and dynamic text boxes that can contain CDATA- HTML, including a featured news capability to edit the status and HTML of a particular item, despite the CDATA (<--this was our proud accomplishment). 

What this means in more layman"'"s terms, cow(boy/girl), is that this code allows you to treat your XML as a string of ponies.  You never know which one you want to ride, and sometimes a few of them need some extra attention.  All jokes aside, what we have here is an XML file with XML entries in the form of a title or date, content that contains HTML*(more on that in a second, hold your horses!), and the ability to select whether the news is featured or is displayed on the front page.  One form allows you to edit the existing XML file.  Another allows you to add a new item.  Additionally, another file displays featured news, and yet another displays content selected as "'"only front page"'", to give you some ideas on what you can do with this.

*We implemented nicEdit text boxes in our demo, with limited features, to allow the addition of html code for styling the text.  You can choose to implement a different content editor for the text boxes, there are several out there.  This is not a necessary step, but is useful

every time the file is updated, it regenerates the content.  this is not currently suitable for large XML feeds!!

This is not compatible out of the box with your pre-existing XML feed, sorry!

currently, this is not in RSS format.  That could easily be fixed, however, by just manipulating the field order and names.  Feel free to fork it on over :)

1. you need to have the ability to install and edit PHP files, preferably with the option to add .htaccess files to your server
2. extract the contents of this folder to your server
3. make sure you have the ability to edit and upload files to the working directory in the permissions set correctly.  you probably want to add some security to the directory and also add htaccess to include PHP in your HTML files! it will make your life easier
4. add and implement your chosen content editor, if not following our use of nicEdit
5. edit and customize as needed!
6. ...
7. collect MOO-nies. profit.  To the MOOn.  
