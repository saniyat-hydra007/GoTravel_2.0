<?php

$topic=$_GET['topic'];

error_reporting(0);

$link = mysqli_connect("localhost", "root", "", "go_travel");
$status = 'OK';
$content;

if (mysqli_connect_errno()) 
        {
                $status = 'ERROR';
                $content = mysqli_connect_error();
        }

$query = "SELECT * FROM post WHERE topic LIKE '%$topic%'";

if ($result = mysqli_query($link, $query))
 {
        $content =  mysqli_fetch_assoc($result);
 }

header('Content-type: application/json');

echo json_encode($content);

