<?php
/*
 *lucid
 */

define("DB_TYPE", "mysql");

$db_file =  DB_TYPE . ".ini";
$parse = (object) parse_ini_file( $db_file );
if (!isset($parse->url)) {
  die("missing database url\n");
}
$url = $parse->url;
if (DB_TYPE == "sqlite") { 
  // If the spec does not use an absolute path, then we are expecting the keyword 
  // __DIR__ at the top of the path, and we replace it by this directory.
  $url = str_replace( "__DIR__", __DIR__, $url );
}
elseif (DB_TYPE != "mysql") {
  die("unsupported database type: " . DB_TYPE . "\n");
}
if (!isset($parse->username)) $parse->username = null;
if (!isset($parse->password)) $parse->password = null;

require_once "rb.php";
R::setup( $url, $parse->username, $parse->password);
R::freeze(true);

?>
