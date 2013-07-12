<?php
chdir(__DIR__);

require_once "../include/db.php";

if (isset($_SERVER['REQUEST_URI'])) echo "<pre>\n";

$table = "cruise_contract";

echo "----> create $table using DB type: ", DB_TYPE, "\n";

$dbtype = DB_TYPE;

$table_def = file_get_contents("$table-$dbtype.sql");

try {
  $sql = "drop table if exists `$table`";
  echo "===> $sql\n";
  R::exec($sql);
  $sql = "create table `$table` ($table_def)";
  echo "===> $sql\n";
  R::exec($sql);
}
catch(Exception $ex) {
  echo $ex->getMessage(), "\n"; 
}
?>
