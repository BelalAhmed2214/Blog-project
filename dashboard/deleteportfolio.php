<?php
session_start();
require_once("lib/portfolio.php");
$res=DeletePro($_GET['pro_id']);
if ($res==true)
{
    header("LOCATION:allportfolio.php");
}
else
{
    header("LOCATION:allportfolio.php");
}

?>