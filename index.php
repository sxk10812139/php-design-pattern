<?php
/**
 * Author: xiangke.sun
 * Email: sxk10812139@163.com
 * DateTime: 16/1/29 15:19
 */

require "./vendor/autoload.php";


$obj = new \Behavioral\Strategy\ObjCollection();
$obj->setStrategy(new \Behavioral\Strategy\IdComparator());
$obj->addElement(array('id'=>2,'date'=>'2012'));
$obj->addElement(array('id'=>1,'date'=>'2015'));
$obj->addElement(array('id'=>10,'date'=>'2015'));
$obj->addElement(array('id'=>9,'date'=>'2015'));
$obj->addElement(array('id'=>100,'date'=>'2015'));
$obj->addElement(array('id'=>0,'date'=>'2015'));
$result = $obj->run()->getElements();
echo '<pre>';
var_dump($result);
exit;