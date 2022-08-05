<?php
//get the link to the foother
$css = '/components/templates/descriptionDisplay/descriptionDisplay.css';

if(empty($description)){
   $name = 'a very interesting description';
}
    
$description = strtolower($description);
include_once('descriptionDisplay.phtml');
?>

