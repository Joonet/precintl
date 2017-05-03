<?php
/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 20/1/2017
 * Time: 16:45
 */
require_once ('config.php');

$con;
if ($con = mysql_connect(HOST, USERNAME,PASSWORD)){
    echo 'connect Succeed!';
}else{
    echo mysql_error();
}

if (mysql_select_db('info')){
    echo 'db Succeed';
}else{
    echo mysql_error();
}

//字符集
if (!mysql_query('set names utf8')){
    echo mysql_error();
}
