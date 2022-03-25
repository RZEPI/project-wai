<?php
if(isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 1;
$dirContent = scandir('images');
$galleryContent = array();
$links = array();
foreach($dirContent as $content)
{
    if(!strncmp($content,'min', 3))
    {
        array_push($galleryContent, $content);
    }
}
foreach($dirContent as $content)
{
    if(!strncmp($content,'WM', 2))
    {
        array_push($links, $content);
    }
}
?>