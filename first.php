<?php
/**
 * Created by PhpStorm.
 * User: Jo
 * Date: 18/1/2017
 * Time: 20:17
 */

header('Content-Type: text/html; charset=utf8');
//连接数据库
$link = mysql_connect("127.0.0.1","root","admin");
if(!$link){
    echo mysql_error($link);
    echo '数据库连接失败...<br>';
    exit(-1);
}else{
    echo "数据库连接成功...<br>";
}
mysql_select_db('imooc');
//$sql = "create table t1(name CHAR(20) NOT NULL UNIQUE ,age INT NOT NULL DEFAULT 20)";
//if(mysql_query($sql)){
//    echo 'Succed!';
//}else{
//    echo mysql_error($link);
//}
mysql_query('set names utf8');
//mysql_query("insert into t1 VALUES ('你大爷', 25)");

$query = mysql_query('select * from fruitshop');
//while($row = mysql_fetch_row($query)){
//    echo $row[0].'价格为：'.$row[1]."             \n";
//}

//$arr = mysql_fetch_array($query,MYSQL_ASSOC);//索引数组加关联数组
while ($arr = mysql_fetch_object($query)){
    print_r($arr);
    echo "<br>";
}



$arr = array(
    'id' => 2,
    'name' => 3,
    'cate' => array(
        'c1' => '89',
        'c2' => 'Jo',
        'c3' => array(
            '1' => 1,
            '2' => 4,
            '3' => true,
            '4' => false
        )
    ),
    'age' => 3.5,
    'brand' => null
);

echo json_encode($arr);

