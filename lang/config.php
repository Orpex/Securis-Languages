<?php
/*
  This file holds language settings
*/
$lang_sett=array();

$lang_sett['current']="cs";

$lang_text=array();

//language text files
@include("lang/".$lang_sett['current']."/content.php");
//end
?>
