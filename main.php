<?php
require_once "true-flag-file.php";
require_once $app_main_res . "/lib/main.php";


$thisapp = new MyAppUI;


$subpage_mapper = array(
  
  // "index.html" - the welcome page of the app
  "/index.html" => $app_main_res . "/show-index-html.php",
  "/" => $app_main_res . "/redirect-to-index.php",
  
  // "quiz.html" - the page from which you quiz yourself
  "/quiz.html" => $app_main_res . "/show-quiz-html.php",
  
  // "mydeck.json" - the full JSON content of your decks
  "/mydeck.json" => $app_main_res . "/show-mydeck-json.php",
  
  // "built-in.css" - The built-in CSS file (*not* mandatory to use)
  "/built-in.css" => $app_main_res . "/show-built-in-css.php",
  
  // "manifest.apache" - The Manifest File
  "/manifest.apache" => $app_main_res . "/show-manifest-apache.php",
  
);

$subpage_path = $_SERVER["PATH_INFO"];
if ( $subpage_path == "" )
{
  require $app_main_res . "/redirect-to-index.php";
}
if ( !(isset($subpage_mapper[$subpage_path])) )
{
  require $app_main_res . "/redirect-to-index.php";
}
require $subpage_mapper[$subpage_path];

?>