<?php
 $all_files = glob("posts/*.*");
 for ($i=0; $i<count($all_files); $i++)
   {
     $image_name = $all_files[$i];
     $supported_format = array('jpg','jpeg');
     $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
     if (in_array($ext, $supported_format))
         {
           echo '<img src="'.$image_name .'" alt="'.$image_name.'" />'."<br /><br />";
         } else {
             continue;
         }
   }
?>