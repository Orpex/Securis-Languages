<?php
/*
  This file should be used as implementation file
*/
@include("lang/config.php");

function GetSelectedLang()
{
  global $lang_sett;
  return $lang_sett['current'];
}

function LangText($text,$parse_arr)
{
  global $lang_text;
  if(isset($parse_arr))
    while(list($key,$val) = each($parse_arr))
      $lang_text[$text] = str_replace($key,$val,$lang_text[$text]);
  echo $lang_text[$text];
  return $lang_text[$text];
}
?>
