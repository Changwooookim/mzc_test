<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$db = new mysqli("172.17.0.2", "adminadmin", "adminadmin", "post_board");
$db->set_charset("utf8");

function mq($sql)
{
	global $db;
	return $db->query($sql);
}
