<?php

$str="id;name;responsible_user_id;date_create;last_modified;created_user_id;modified_user_id \n";
$str=$str.$_POST['contacts']['add']['0']['id'].';';
$str=$str.$_POST['contacts']['add']['0']['name'].';';
$str=$str.$_POST['contacts']['add']['0']['responsible_user_id'].';';
$str=$str.$_POST['contacts']['add']['0']['date_create'].';';
$str=$str.$_POST['contacts']['add']['0']['last_modified'].';';
$str=$str.$_POST['contacts']['add']['0']['created_user_id'].';';
$str=$str.$_POST['contacts']['add']['0']['modified_user_id'];


file_put_contents("hook.csv",$str);
?>