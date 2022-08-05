<?php
//get the link to the foother
$css = '/components/templates/nameDisplay/nameDisplay.css';

if(empty($name)){
   $name = 'lucien kaeser';
}
    
$name = strtolower($name);
include_once('nameDisplay.phtml');
?>

