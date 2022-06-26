<?php

$city=$_GET['city'];

error_reporting(0);

$link = mysqli_connect("localhost", "root", "", "bus_booking");
$status = 'OK';
$content;

if (mysqli_connect_errno()) 
        {
                $status = 'ERROR';
                $content = mysqli_connect_error();
        }

$query = "SELECT * FROM location where city='$city'";

if ($result = mysqli_query($link, $query))
 {
        $content =  mysqli_fetch_assoc($result);
 }

header('Content-type: application/json');

echo json_encode($content);

