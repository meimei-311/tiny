<?php
/*
Template Name:search_md5
*/

get_header(2);

require_once("search_md5_page.php");
$test_post = $_GET['md5'];
search_md5($test_post);
require_once("sidebar.php");
require_once("sidebar-2.php");

// get_footer();
?>

