<?php
  $links = array(
      array('Google' , '<a
      href="https://www.google.com/">https://www.google.com/</a> ' ),
      array('Yahoo' , '<a
            href="https://www.yahoo.com//">https://www.yahoo.com//</a> '),
      array('Facebook' , '<a
                  href="https://www.facebook.com/">https://www.facebook.com/</a> '),
      array('YouTube' , '<a
                  href="https://www.youtube.com/">https://www.youtube.com/</a> '),
      array('Twitter' , '<a
                  href="https://twitter.com/">https://twitter.com/</a> ')
  );

  echo '<table border="1">';
  echo '<tr><th>Name</th><th>Link</th></tr>';
  foreach( $links as $link )
  {
	 echo '<tr>';
	 foreach( $link as $key )
	 {
		 echo '<td>'.$key.'</td>';
	 }
	 echo '</tr>';
 }
 echo '</table>';
 ?>
