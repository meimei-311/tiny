<?php
/*
Template Name:search_md5
*/

get_header();
?>


<?php

include_once('common.php');
$test_post = $_GET['md5'];
search_md5($test_post);

?>

