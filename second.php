<?php
/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 20/1/2017
 * Time: 14:40
 */

$con = mysql_connect('127.0.0.1', 'root', 'admin');
mysql_select_db('imooc');
//设置字符集
mysql_query('set names utf8');

//$query = mysql_query('select * from fruitshop');

//
//if ($query && mysql_num_rows($query)){
//    while($arr = mysql_fetch_assoc($query)){
//        print_r($arr);
//        echo "<br>";
//    }
//}

//$arr = mysql_fetch_row($query);
//echo $arr[0];

//echo mysql_result($query,2,'price');

if (mysql_query("insert into fruitshop VALUES (13,'Halo', 100, 21.8)")){
    echo "Succeed!,修改的数据条数为：";
    echo mysql_affected_rows($con);
}else{
    echo "Failed";
}
