<?php
require_once "true-flag-file.php";

function app_invocation_url ( )
{
  $lc_ret = "http://";
  if ( isset($_SERVER['HTTPS']) )
  {
    $lc_ret = "https://";
  }
  $lc_ret .= $_SERVER['SERVER_NAME'];
  $lc_ret .= $_SERVER['SCRIPT_NAME'];
  return $lc_ret;
}

class MyAppUI {
  protected $prv_yet_to_init = false;
  
  public function html_header ( ) {
    echo "<!DOCTYPE html>\n";
    echo "<html manifest = \"manifest.apache\">\n";
    echo "<body>\n";
  }
  public function html_footer ( ) {
    echo "</body>\n";
    echo "</html>\n";
  }
}

