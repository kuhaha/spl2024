<?php
define("VIEW_DIR", "views/");

include(VIEW_DIR . "pg_header.php");

$to = isset($_GET['to']) ? $_GET['to'] : 'usr';
$do = isset($_GET['do']) ? $_GET['do'] : "list";
include(VIEW_DIR . "{$to}_{$do}.php");

include(VIEW_DIR . "pg_footer.php");
